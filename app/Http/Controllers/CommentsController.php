<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request,$postId)
    {

    }


    public function store(Request $request,$postId)
    {

        $validated = $request->validate([
            'content' => 'max:255',
        ]);



            $commentsModel=Comments::create([
                "content" => $request->get('content'),
                "post_id" =>$postId,

                "user_id" => \Session::get('user')->id
            ]);

            $user=User::where('id','=',\Session::get('user')->id)->get();
            Log::channel('abuse')->alert("ADDED COMMENT");

            return response()->json([
                "data"=>[$commentsModel,$user]
            ]);



    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $commentId=$request->get('id');
        $commentsModel=new Comments();
        $updated=$commentsModel->where('id','=',$commentId)->update([
            "content" => $request->get('comment'),
        ]);

        Log::channel('abuse')->alert("EDITED COMMENT");

        return response()->json($updated);




    }


    public function destroy(Request $request)
    {
        $comId=$request->get('id');
        //$userId=Session::get('user')->id;

        try{

            Comments::find($comId)->delete($comId);
            //$comments=Comments::with('user','post')->get();

            Log::channel('abuse')->alert("DELETED COMMENT");
            return response()->json();


        }catch (\Exception $e){

            return response()->json($e->getMessage());

        }
    }
}
