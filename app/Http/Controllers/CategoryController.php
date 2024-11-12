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


    //show category
    public function show($id){
        //need category with count in inventory table for the id
        $category=Category::withCount('inventories')->find($id);

        return view('category.show',compact('category'));
    }

    //add category
    public function create(){
        return view('category.create');
    }

    //store category
    public function store(Request $request){
        $fields=$request->validate([
            'name'=>['required','max:255','unique:categories'],
            'description'=>['required'],          
        ]);


        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category added successfully!');

    }

    //delete category
    public function destroy($id){
        Category::destroy($id);
        return redirect()->route('categories.index')->with('danger1', 'Category deleted successfully!');
        
    }

}
