<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends OsnovniController
{
    public function index(){
        $this->data['comments']=Comments::with('post','user')->paginate(10);
        return view('admin.pages.comments',$this->data);
    }



    public function userComments($id){
        $this->data['usercomments']=Comments::with('post','user')
            ->where('user_id','=',$id)
            ->get();
        //dd($this->data['user']);
        return view('admin.pages.user-comments',$this->data);
    }

    public function destroy($id){
        try{

            Comments::find($id)->delete();
            return redirect()->route("all.comments")->with('success','Comment deleted!');

        }catch (\Exception $e){
            return redirect()->route("all.comments")->with('error',$e->getMessage());

        }
    }
}
