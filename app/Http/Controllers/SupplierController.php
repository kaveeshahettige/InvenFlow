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

    //create supplier
    public function create(){
        return view('supplier.create');
    }

    //store supplier
    public function store(Request $request){
        $fields=$request->validate([
            'name'=>['required','max:255','unique:suppliers'],
            'contact_info'=>['required'],
        ]);

        Supplier::create($request->all());
        return redirect()->route('suppliers.index')->with('success', 'Supplier added successfully!');
    }

    //show supplier
    public function show($id){
        //need supplier with count in inventory table for the id
        $supplier=Supplier::withCount('inventories')->find($id);

        return view('supplier.show',compact('supplier'));
    }

}
