<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalDataController extends Controller
{


    /**
     * PersonalDataController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $id=Auth::user()->id;
        $personal=DB::table('users')->where('id',$id)->get();
        return view('personal')->with('personal',$personal);
    }

    public function edit(Request $request){
        //
    }

}
