<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //show inventory
    public function index() {
        $inventory = Inventory::all(); // Retrieves all inventory items
        return view('inventory.index', compact('inventory'));
    }
    

    //add item
    public function create(){
        return view('inventory.create');
    }

    //store item
    public function store(Request $request){
        $fields=$request->validate([
            'name'=>['required','max:255','unique:inventories'],
            'description'=>['required'],
            'quantity'=>['required','numeric','min:1'],
            'price'=>['required','numeric','min:1'],
            
        ]);


        Inventory::create($request->all());
        return redirect()->route('inventory');

    }

    //edit item
    public function edit($id){
        $item=Inventory::find($id);
        return view('inventory.edit',compact('item'));
    }

    //update item
    public function update(Request $request,$id){
        $item=Inventory::find($id);
        $fields=$request->validate([
            'name'=>['required','max:255'],
            'description'=>['required'],
            'quantity'=>['required','numeric','min:1'],
            'price'=>['required','numeric','min:1'],
            
        ]);
        Inventory::where('id',$id)->update($fields);
        return redirect()->route('inventory');

    }

    //delete item
    public function destroy($id){

    }

}
