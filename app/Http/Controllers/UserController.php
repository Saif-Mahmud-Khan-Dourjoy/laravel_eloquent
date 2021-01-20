<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class UserController extends Controller
{
     public function index(){
        $user=user::all();
        // return response()->json($phone);
        return view('userandphone',compact('user'));
    }
}
