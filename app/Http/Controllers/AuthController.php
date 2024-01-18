<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Validation\Validator;

use App\Models\usercrud;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function UserAuth(Request $request){

     $rules = [
        'name' => 'required|min:3|string|max:255',
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'pass' => 'required|string|min:3',
        'address' => 'required|min:3|string|max:255',
        'city' => 'required|min:3|string|max:255',
        'zip'=>'required|min:3|string|max:255',
    ];
    $hashedPassword = Hash::make($request->input('pass'));

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $existingEmail = usercrud::where('email', $request->email)->exists();

    if ($validator->fails() || $existingEmail) {
        $errors = $validator->errors();

        if ($existingEmail) {
            $errors->add('email', 'The email address is already taken.');
        }

        return redirect('sign-up')->withErrors($errors)->withInput();
    }

    usercrud::create([
        'name'=> $request->name,
        'email'=>$request->email,
        // 'pass'=>$hashedPassword,
        'pass'=>$request->pass,
        'address'=>$request->address,
        'city'=>$request->city,
        'zip'=>$request->zip,

    ]);

    return redirect("users")->with('success', 'Data stored successfully');
    }

    public function getUsers(){
        $users = usercrud::paginate(10);
        return view('users',['data'=> $users]);
      
  }
   

  public function getEditUsers($id){
    $users = usercrud::find($id);
    return view('edit',['users'=> $users]);
  }

  public function userUpdate(Request $request){

    $request->validate([
        'name' => 'required|min:3|string|max:255',
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'pass' => 'required|string|min:3',
        'address' => 'required|min:3|string|max:255',
        'city' => 'required|min:3|string|max:255',
        'zip'=>'required|min:3|string|max:255',
    ]);

   $data= usercrud::find($request->id);

   if(!$data){
    return redirect('users')->with('error', 'Member not found');
   }

   $data->name= $request->name;
   $data->email= $request->email;
   $data->pass= $request->pass;
   $data->address= $request->address;
   $data->city= $request->city;
   $data->zip= $request->zip;
   $data->save();
   return redirect('users')->with('success', 'Member updated successfully');
  }

}
