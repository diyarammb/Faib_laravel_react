<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class ResourceController extends Controller
{
    public function index(){
        $res=DB::table('resources')->get();
        return view('admin.resources',compact('res'));
    }
    public function create(Request $request){
        $data=[
            'file_name'=>$request->input('file_name'),
            'file_link'=>$request->input('file_link'),
            'membership'=>$request->input('membership'),
            'type'=>$request->input('type'),
            'created_at'=>Carbon::now(),
        ];

        $res=DB::table('resources')->insert($data);
        if($res){
            return redirect()->back();
        }
    }
}
