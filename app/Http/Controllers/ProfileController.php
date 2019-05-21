<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{


    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        $profile = DB::table('users')->where('id', $id)->get();
        return view('profile')->with('profile', $profile);
    }

    public function edit(Request $request)
    {
        //
    }

}
