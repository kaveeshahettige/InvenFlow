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

    }

    //store item
    public function store(StorePostRequest $request){

    }

    //edit item
    public function edit($id){

    }

    //update item
    public function update(StorePostRequest $request, $id){

    }

    //delete item
    public function destroy($id){

    }

}
