<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    public function index(){
    	return view('backend.slider.add-slider');
    }
    public function saveSlider(Request $request){
    	$request->validate(['image'=>'required','publication_status'=>'required']);

    	$slider = new Slider;
    	$slider->image = $request->image->store('sliders','public');
    	$slider->publication_status = $request->publication_status;
    	$slider->save();
    	return back()->with('message','Slider Uploaded Successfully');
    }
}
