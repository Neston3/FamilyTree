<?php

namespace App\Http\Controllers;

use App\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    /**
     * SignupController constructor.
     */
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function index()
    {
        $id = Auth::user()->id;
        $data = DB::table('users')->where('id', $id)->get();
        return view('signup')->with('user', $data);
    }

    public function create()
    {

    }

    public function edit(Request $request)
    {
        $id = Auth::user()->id;
        $middlename = $request->input('middle-name');
        $nickname = $request->input('nick-name');
        $dateofbirth = $request->input('dob');
        $phone = $request->input('phone');

        DB::table('users')->where('id',$id)->update(
            array('middle_name'=>$middlename,
                'nickname'=>$nickname,
                'birth_data'=>$dateofbirth,
                'phone_number'=>$phone)
        );

        return redirect('/profile');

    }

}
