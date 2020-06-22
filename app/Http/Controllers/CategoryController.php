<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
    	return view('backend.categories.add-category');
    }
    public function saveCategory(Request $request){
    	$request->validate(['category_name'=>'required', 
    						'category_description'=>'required', 
    						'publication_status'=>'required'
    					]);
    	$value = new Category;
    	$value->category_name = $request->category_name;
    	$value->category_description = $request->category_description;
    	$value->publication_status = $request->publication_status;
    	$value->save();
    	return back()->with('message','Value is Inserted');
    }
    public function categoryList(){
    	$categories = Category::all();
    	return view('backend.categories.category-list',['categories'=>$categories]);
    }
}
