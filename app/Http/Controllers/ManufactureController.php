<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacture;
class ManufactureController extends Controller
{
    public function index(){
    	return view('backend.manufactures.add-manufacture');
    }
    public function saveManufacture(Request $request){
    	$request->validate(['manufacture_name'=>'required', 
    						'manufacture_description'=>'required', 
    						'publication_status'=>'required'
    					]);
    	$value = new Manufacture;
    	$value->manufacture_name = $request->manufacture_name;
    	$value->manufacture_description = $request->manufacture_description;
    	$value->publication_status = $request->publication_status;
    	$value->save();
    	return back()->with('message','Value is Inserted');
    }
    public function manufactureList(){
    	$manufactures = Manufacture::all();
    	return view('backend.manufactures.manufacture-list',['manufactures'=>$manufactures]);
    }
}
