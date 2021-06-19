<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\LogActivity;
use App\Http\Controllers\OsnovniController;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends OsnovniController
{


   public function login(LoginUserRequest $request){

    $email=$request->input("email");
    $password=md5($request->input("password"));

    try{
        $user=DB::table('users')
            ->where("email","=",$email)->where("password","=",$password)
            ->where('deleted_at','=',null)
            ->select('*')->first();



        if($user) {

            $request->session()->put("user", $user);


            Log::channel('abuse')->alert("LOGGED IN");

            if(session('user')->role_id==2){
                return redirect()->route("dashboard",$user->id);
            }


            return redirect()->route("home");

        }

        return redirect()->route("loginForm")->with('error','Email or password doesnt match!');

    }catch(\Exception $e){
        dd($e->getMessage());

    }

   }

    public function logout(Request $request) {

        Log::channel('abuse')->alert("LOGGED OUT");

        $request->session()->remove("user");

        return redirect()->route("home");
    }
}
