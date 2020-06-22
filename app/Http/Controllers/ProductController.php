<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacture;
use App\Product;
class ProductController extends Controller
{
    public function index(){
    	$data = [];
    	$data['categories'] = Category::all();
    	$data['brands'] = Manufacture::all();
    	return view('backend.products.add-product',$data);
    }
    public function saveProduct(Request $request){
    	$request->validate([
    				'product_name' => 'required',
    				'category_name' => 'required',
    				'brand_name' => 'required',
    				'short_description' => 'required',
    				'long_description'=> 'required',
    				'price' => 'required',
    				'image' => 'required',
    				'size' => 'required',
    				'color' => 'required',
    				'publication_status' => 'required'
    			]);
    	$product = new Product;
    	$product->product_name = $request->product_name;
    	$product->category_id = $request->category_name;
    	$product->manufacture_id = $request->brand_name;
    	$product->short_description = $request->short_description;
    	$product->long_description = $request->long_description;
    	$product->price = $request->price;
    	$product->image = $request->image->store('products','public');
        $product->size = $request->size;
        $product->color = $request->color;
        $product->publication_status = $request->publication_status;
        $product->save();     
        return back()->with('message','Product Added Successfully');
    }
    public function productList(){
        $products = Product::all();
        return view('backend.products.product-list',['products'=>$products]);
    }
}
