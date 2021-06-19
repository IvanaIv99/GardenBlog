<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\OsnovniController;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class RegisterController extends OsnovniController
{
    public function register(RegisterUserRequest $request){

        try{

            if($request->hasFile('photo')){
                $photo=$request->file('photo');
                $rePhoto=time().'.'.$photo->getClientOriginalExtension();
                $dest=public_path('/images/profilePhotos');
                $photo->move($dest,$rePhoto);
            }else{
                if($request->gender=='male'){
                    $rePhoto='male-thumbnail.png';
                }else{
                    $rePhoto='female-thumbnail.png';
                }

            }

            User::create([
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,
                'password'=>md5($request->password),
                'photo'=>$rePhoto,
                'role_id'=>1,
                'gender'=>$request->gender,
                'remember_token'=>$request->_token,
                'active'=>1
            ]);

            return redirect()->route('registerForm')->with('success','Registred succesfully! Please log in now.');


        }catch(\Exception $e){

            return redirect()->route('registerForm')->with('error','An error occured!');

        }


    }
}
