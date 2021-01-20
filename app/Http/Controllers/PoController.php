<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\po;
class PoController extends Controller
{
    public function  index(){
    	$post=po::all();
    	return view('post',compact('post'));
    }

    public function single($id){

    	$singlePost=po::where('user_id',$id)->get();
    	return view('singleuserpost',compact('singlePost'));

    }
}
