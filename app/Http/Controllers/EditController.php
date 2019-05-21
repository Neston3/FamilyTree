<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{


    /**
     * EditController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $edit_data=DB::table('users')->where('id',$id)->get();
        return view('edit')->with('editData',$edit_data);
    }

    public function imageSave(Request $request){
        if ($request->hasFile('profile_picture')) {
            $destinationPath = 'uploads';
            $files = $request->profile_picture;
            $file_name = $files->getClientOriginalName();
            $files->move($destinationPath, $file_name);
            return $file_name;

        }
        return '';
    }

    public function save(Request $request, $id){

        $name=$this->imageSave($request);

        $firstname=$request->input('first-name');
        $middlename = $request->input('middle-name');
        $lastname=$request->input('last-name');
        $nickname = $request->input('nick-name');
        $occupation=$request->input('occupation');
        $dateofbirth = $request->input('dob');
        $email=$request->input('email');
        $phone = $request->input('phone');
        $facebook=$request->input('facebook');
        $twitter=$request->input('twitter');
        $linkedin=$request->input('linkedin');
        $instagram=$request->input('instagram');
        $pinterest=$request->input('pinterest');

        DB::table('users')->where('id',$id)->update(
            array(
                'first_name'=>$firstname,
                'middle_name'=>$middlename,
                'last_name'=>$lastname,
                'nickname'=>$nickname,
                'email'=>$email,
                'birth_data'=>$dateofbirth,
                'image'=>$name,
                'occupation'=>$occupation,
                'facebook'=>$facebook,
                'twitter'=>$twitter,
                'linkedin'=>$linkedin,
                'instagram'=>$instagram,
                'pinterest'=>$pinterest,
                'phone_number'=>$phone)
        );

        return redirect('/profile');

    }


}
