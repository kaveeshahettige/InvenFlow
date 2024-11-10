<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Http\JsonResponse;

class InventoryAPIController extends Controller
{
    // Show all inventory items with search, sort, and pagination
    public function index(Request $request): JsonResponse
    {
        $query = $request->get('search');
        $sort = $request->get('sort', 'name'); // Default sort by name
        $order = $request->get('order', 'asc');

        $inventoryQuery = Inventory::query();

        if ($query) {
            $inventoryQuery->where('name', 'like', '%' . $query . '%');
        }

        if (in_array($sort, ['name', 'quantity', 'price'])) {
            $inventoryQuery->orderBy($sort, $order);
        }

        $inventory = $inventoryQuery->paginate(5)->appends([
            'search' => $query,
            'sort' => $sort,
            'order' => $order,
        ]);

        return response()->json($inventory);
    }

    // Show a single inventory item
    public function show($id): JsonResponse
    {
        $item = Inventory::find($id);

        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        return response()->json($item);
    }

    // Store a new inventory item
    public function store(Request $request): JsonResponse
    {
        $fields = $request->validate([
            'name' => ['required', 'max:255', 'unique:inventories'],
            'description' => ['required'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric', 'min:1'],
        ]);

        $item = Inventory::create($fields);

        return response()->json(['success' => 'Item added successfully!', 'item' => $item], 201);
    }

    // Update an existing inventory item
    public function update(Request $request, $id): JsonResponse
    {
        $item = Inventory::find($id);

        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric', 'min:1'],
        ]);

        $item->update($fields);

        return response()->json(['success' => 'Item updated successfully!', 'item' => $item]);
    }

    // Delete an inventory item
    public function destroy($id): JsonResponse
    {
        $item = Inventory::find($id);

        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $item->delete();

        return response()->json(['success' => 'Item deleted successfully!']);
    }
}
