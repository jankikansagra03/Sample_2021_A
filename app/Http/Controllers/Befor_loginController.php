<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;

class Befor_loginController extends Controller
{
    public function insert_registration(Request $request)
    {
        $rules = [
            'fn' => 'required|min:3|max:40',
            'em' => 'required|email|unique:registration,email',
            'pwd' => 'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/',
            'pwd_confirmation' => 'required',
            'mobile' => 'required|digits:10',
            'pic' => 'required|max:300|mimes:jpg,png,gif,bmp'
        ];
        $error_msg = [
            'fn.required' => 'Fullname cannot be empty',
            'fn.max' => 'Fullname must be at maximum 40 chracters',
            'fn.min' => 'Fullname must be atleast 3 characters',
            'em.required' => 'Email address cannot be empty',
            'em.email' => 'Invalid email address',
            'em.unique' => 'Email address already registered',
            'pwd.required' => 'Password cannot be empty',
            'pwd.confirmed' => 'Password and Confirm Password must match',
            'pwd.regex' => 'Password must contain one digit,one character both upper and lower and a special character',
            'pwd_confirmation.required' => 'Confirm Password cannot be empty',
            'mobile.required' => 'Mobile number cannot be empty',
            'mobile.digits' => 'Mobile number must contain only 10 digits',
            'pic.required' => 'Please select a profile picture',
            'pic.max' => 'Please select a profile picture of size less than or eqaul to 300Kb',
            'pic.mimes' => 'Select JPG,PNG,GIF,BMP Files only'
        ];
        $request->validate($rules, $error_msg);
        //return redirect("{{URL::to('register')}}");

        $register = new Registration();

        $register->fullname = $request->fn;
        $register->email = $request->em;
        $register->password = $request->pwd;
        $register->mobile = $request->mobile;
        $original_name = uniqid() . $request->file('pic')->getClientOriginalName();
        $register->pic = $original_name;
        $request->pic->move("profile_pictures/" . $original_name);
        if ($register->save()) {
            $data = array('fn' => $request->fn, 'em' => $request->em);
            Mail::send(['text' => 'account_created_mail'], ['data1' => $data], function ($message) use ($data) {
                $message->to($data['em'], $data['fn']);
                $message->from("janki.kansagra@rku.ac.in", "Janki Kansagra");
            });
        }
    }

    public function account_activation($email)
    {
        }
}
