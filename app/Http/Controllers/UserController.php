<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Post;
use App\Models\Categories;
use App\Models\Visits;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent;



class UserController extends OsnovniController
{

    public function show($id){

        $this->data['user']=User::find($id);
        return view('front.pages.user-profile',$this->data);
    }

    public function userPosts(){

        $userId=Session::get('user')->id;
        $this->data['posts']=Post::with('user')->where('user_id','=',$userId)->paginate(3);

        return view('front.pages.user-posts',$this->data);
    }

    public function edit($id){

        $this->data['user']=User::find($id);
        return view('front.pages.edit-profile',$this->data);
    }

    public function update($id,UpdateUserRequest $request){

        try{

            if($request->hasFile('photo')){

                $photo=$request->file('photo');
                $rePhoto=time().'.'.$photo->getClientOriginalExtension();
                $dest=public_path('/images/profilePhotos');
                $photo->move($dest,$rePhoto);


                User::find($id)->update([
                    'first_name'=>$request->firstname,
                    'last_name'=>$request->lastname,
                    'email'=>$request->email,
                    'gender'=>$request->gender,
                    'bio'=>$request->bio,
                    'photo'=>$rePhoto
                ]);


                Log::channel('abuse')->alert("UPDATED PROFILE");
                return redirect()->route('myprofile',$id)->with('success','Updated!');

            }else{

                User::find($id)->update([
                    'first_name'=>$request->firstname,
                    'last_name'=>$request->lastname,
                    'email'=>$request->email,
                    'gender'=>$request->gender,
                    'bio'=>$request->bio
                ]);



                Log::channel('abuse')->alert("UPDATED PROFILE");
                return redirect()->route('myprofile',$id)->with('success','Updated!');
            }

        }catch (\Exception $e){
            return redirect()->route('edit-profile',$id)->with('error','An error occured!');
        }
    }

    public function changePassword($id){
        $this->data['user']=User::find($id);
        return view('front.pages.change-password',$this->data);
    }

    public function updatePassword(ChangePasswordRequest $request, $id){

        try{

            if ( md5($request->current_password) != Session::get('user')->password ) {
                return redirect()->route('change-password',$id)->with('error', 'Current password does not match!');
            }


            User::find($id)->update([
                'password'=>md5($request->password)
            ]);

            Log::channel('abuse')->alert("CHANGED PASSWORD");
            return redirect()->route('myprofile',$id)->with('success','Password changed!');

        }catch (\Exception $e){

            return redirect()->route('change-password',$id)->with('error','An error occured!');

        }

    }

    public function destroy($id){

        try{

            $commentModel=new Comments();
            $commentModel->where('user_id','=',$id)->delete();

            $postModel=new Post();
            $postModel->where('user_id','=',$id)->delete();

            User::find($id)->delete();

            Log::channel('abuse')->alert("DEACTIVATED ACCOUNT");
            return redirect()->route('logout');

        }catch (\Exception $e){

            return redirect()->route('edit-profile',$id)->with('error','An error occured!');

        }
    }
}
