<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CustomerController extends Controller
{
    public function index(){
    	$products = Product::all();
    	return view('frontend.home',['products'=>$products]);
    }
    public function categoryWiseProduct(Request $request){
    	$products = Product::where(['category_id'=>$request->category_id])->get();
    	return view('frontend.products.category-wise-product',['products'=>$products]);
    }
    public function productDetails($id){
    	$product = Product::find($id);
    	return view('frontend.products.product-details',['product'=>$product]);
    } 
}
