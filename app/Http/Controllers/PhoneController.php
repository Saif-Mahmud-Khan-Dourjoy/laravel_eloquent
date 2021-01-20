<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
class PhoneController extends Controller
{
    public function index(){
        $phone=phone::all();
        // return response()->json($phone);
        return view('phoneanduser',compact('phone'));
    }
}
