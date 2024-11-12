<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category;
use App\Models\Supplier;

class InventoryController extends Controller
{
    //show inventory
    public function index(Request $request)
{
    $query = $request->get('search');
    $sort = $request->get('sort', 'name'); // Default sort by name
    $order = $request->get('order', 'asc'); 

    //taking related data from category and supplier tables
    $inventoryQuery = Inventory::query()->with('category', 'supplier');


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

    return view('inventory.index', compact('inventory'));
}


    //show item
    public function show($id){
        $item=Inventory::with('category', 'supplier')->find($id);;
        return view('inventory.show',compact('item'));
    }

    //add item
    public function create(){

        $data = [
            'categories' => Category::all(), // Fetch all categories
            'suppliers' => Supplier::all(),   // Fetch all suppliers
        ];
        
        return view('inventory.create', compact('data'));
        
    }

    //store item
    public function store(Request $request){
        $fields=$request->validate([
            'name'=>['required','max:255','unique:inventories'],
            'description'=>['required'],
            'quantity'=>['required','numeric','min:1'],
            'price'=>['required','numeric','min:1'],
            'category_id'=>['required'],
            'supplier_id'=>['required'],     
        ]);

        Inventory::create($request->all());
        return redirect()->route('items.index')->with('success', 'Item added successfully!');

    }

    //edit item
    public function edit($id){
        $data = [
            'categories' => Category::all(), // Fetch all categories
            'suppliers' => Supplier::all(),   // Fetch all suppliers
            'item'=>Inventory::with('category', 'supplier')->find($id),
        ];

        return view('inventory.edit',compact('data'));
    }

    //update item
    public function update(Request $request,$id){
        $item=Inventory::find($id);
        $fields=$request->validate([
            'name'=>['required','max:255'],
            'description'=>['required'],
            'quantity'=>['required','numeric','min:1'],
            'price'=>['required','numeric','min:1'],
            'category_id'=>['required'],
            'supplier_id'=>['required'],
            
        ]);
        Inventory::where('id',$id)->update($fields);
        return redirect()->route('items.index')->with('success1', 'Item updated successfully!');

    }

    //delete item
    public function destroy($id){
        Inventory::destroy($id);
        return redirect()->route('items.index')->with('danger1', 'Item deleted successfully!');
        
    }

}
