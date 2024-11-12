<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;


class SupplierController extends Controller
{
    //show suppliers
    public function index(Request $request)
{
    $query = $request->get('search');
    
    $supplierQuery = Supplier::withCount('inventories');


    if ($query) {
        $supplierQuery->where('name', 'like', '%' . $query . '%');
    }

    $suppliers = $supplierQuery->paginate(5)->appends([
        'search' => $query,
    ]);

    return view('supplier.index', compact('suppliers'));
}

}
