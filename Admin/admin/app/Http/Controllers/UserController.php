<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;

class UserController extends Controller
{

    public function index()
    {
        $user = DB::table('users')->get();
        return view('admin.users', compact('user'));

    }

    public function create( Request $request ){
         
        $data=[
            "first_name"=>$request->input('first_name'),
            "last_name"=>$request->input('last_name'),
            "email"=>$request->input('email'),
            "cemail"=>$request->input('cemail'),
            "number"=>$request->input('number'),
            "pass"=>$request->input('pass'),
            "cpass"=>$request->input('cpass'),
            "hereby"=>$request->input('hereby'),
            "newsletter"=>$request->input('newsletter'),
            "created_at"=>Carbon::now(),
            "status"=>0,
        ];

        $res=DB::table('users')->insert($data);
        return redirect()->back();
         
    }
}