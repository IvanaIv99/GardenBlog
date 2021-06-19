<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\OsnovniController;
use App\Models\User;
use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Comment;

class UserController extends OsnovniController
{
    public function index(){

        $this->data['users']=User::withTrashed()->where('id','!=',$this->data['admin']->id)->paginate(10);
        return view('admin.pages.users',$this->data);
    }

    public function show($id){
        $this->data['user']=User::withTrashed()->with('posts','comments')->find($id);
        //dd($this->data['user']);
        return view('admin.pages.show-user',$this->data);
    }

    public function destroy($id){

        try{
            Post::where('user_id','=',$id)->delete();
            Comments::where('user_id','=',$id)->delete();
            User::find($id)->delete();
            return redirect()->route("users")->with('success','User deleted!');

        }catch (\Exception $e){
            return redirect()->route("users")->with('error',$e->getMessage());

        }
    }
}
