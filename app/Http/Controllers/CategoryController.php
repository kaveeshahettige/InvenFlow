<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //show categories
    public function index(Request $request)
{
    $query = $request->get('search');
    
    $categoryQuery = Category::withCount('inventories');


    if ($query) {
        $categoryQuery->where('name', 'like', '%' . $query . '%');
    }

    $categories = $categoryQuery->paginate(5)->appends([
        'search' => $query,
    ]);

    return view('category.index', compact('categories'));
}


    //show item
    public function show($id){
        $category=Category::find($id);
        return view('category.show',compact('category'));
    }

    // //add item
    // public function create(){
    //     return view('inventory.create');
    // }

    // //store item
    // public function store(Request $request){
    //     $fields=$request->validate([
    //         'name'=>['required','max:255','unique:inventories'],
    //         'description'=>['required'],
    //         'quantity'=>['required','numeric','min:1'],
    //         'price'=>['required','numeric','min:1'],
            
    //     ]);


    //     Inventory::create($request->all());
    //     return redirect()->route('inventory')->with('success', 'Item added successfully!');

    // }

    // //edit item
    // public function edit($id){
    //     $item=Inventory::find($id);
    //     return view('inventory.edit',compact('item'));
    // }

    // //update item
    // public function update(Request $request,$id){
    //     $item=Inventory::find($id);
    //     $fields=$request->validate([
    //         'name'=>['required','max:255'],
    //         'description'=>['required'],
    //         'quantity'=>['required','numeric','min:1'],
    //         'price'=>['required','numeric','min:1'],
            
    //     ]);
    //     Inventory::where('id',$id)->update($fields);
    //     return redirect()->route('inventory')->with('success1', 'Item updated successfully!');

    // }

    //delete item
    public function destroy($id){
        Category::destroy($id);
        return redirect()->route('categories')->with('danger1', 'Category deleted successfully!');
        
    }

}
