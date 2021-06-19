<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Comments;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class PostController extends OsnovniController
{

    public function __construct()
    {
        parent::__construct();
        $this->postModel = new Post();
    }


    public function getPosts(Request $request){
        $category = $request->get('category');
        $sort = $request->get('sort');
        $text=$request->get("text");

        if(session()->has('user')) $userId=\Session::get('user')->id;
        else $userId = null;

        if($request->has('category') && $request->get('category')!=null){
            if($category==0){
                $postData = Post::with('category','visits','user')->paginate(3);
            }else{

                $postData = Post::with('category','visits','user')->where('category_id','=',$category)->paginate(3);


            }
        }

        if($request->has('sort') && $request->get('sort')!=null ){

            $postData = Post::with('category','visits','user')->orderBy('created_at',$sort)->paginate(3);

        }

        if($request->has('text') && $request->get('text')!=null){
            $postData= Post::with('user','category','visits')
                ->where('title','like', '%'.$text.'%')
                ->paginate(3);
        }


        return response()->json([$postData,$userId]);
    }


    public function create()
    {
        $this->data['post']=null;
        return view('front.pages.add-post',$this->data);
    }


    public function store(AddPostRequest $request)
    {
        try{

                $photo=$request->file('thumbPhoto');
                $rePhoto=time().'.'.$photo->getClientOriginalExtension();
                $dest=public_path('/images/gardening');
                $photo->move($dest,$rePhoto);

                $content=$request->input('content');
                $userId=\Session::get('user')->id;
                //dd($userId);

                Post::create([
                    'title'=>$request->title,
                    'category_id'=>(int)$request->category,
                    'content'=>$content,
                    'thumbPhoto'=>$rePhoto,
                    'user_id'=>$userId
                ]);

                Log::channel('abuse')->alert("CREATED POST");
                return redirect()->route("user-posts")->with('success','Added!');

        }catch (\Exception $e){
            return redirect()->route("add-post")->with('error',$e->getMessage());

        }

    }


    public function show($id,Request $request)
    {
        $postModel=new Post();
        $this->data['post']=Post::find($id);
        //$this->data['post']=$postModel->with('user')->get();
        $postModel->addVisit($id, $request->ip());

        $this->data['comments']=Comments::with('user')->where('post_id','=',$id)->get();

        return view('front.pages.single',$this->data);
    }


    public function edit($id)
    {
        $this->data['post']=Post::with('category','visits','user')->find($id);
        return view('front.pages.edit-post',$this->data);
    }


    public function update(UpdatePostRequest $request, $id)
    {
        try{

           if($request->hasFile('thumbPhoto')){
               $photo=$request->file('thumbPhoto');
               $rePhoto=time().'.'.$photo->getClientOriginalExtension();
               $dest=public_path('/images/gardening');
               $photo->move($dest,$rePhoto);

               $content=$request->input('content');

               Post::find($id)->update([
                   'title'=>$request->title,
                   'category_id'=>(int)$request->category,
                   'content'=>$content,
                   'thumbPhoto'=>$rePhoto,
               ]);
           }else{


               $content=$request->input('content');

               Post::find($id)->update([
                   'title'=>$request->title,
                   'category_id'=>(int)$request->category,
                   'content'=>$content,
               ]);

           }
            Log::channel('abuse')->alert("EDITED POST");
            return redirect()->route("single",$id)->with('success','Updated!');

        }catch (\Exception $e){
            return redirect()->route("edit-post",$id)->with('error',$e->getMessage());

        }
    }


    public function destroy($id)
    {
        try{

            $commentsModel=new Comments();
            $commentsModel->where('post_id','=',$id)->delete();

            $postModel=new Post();
            $postModel->find($id)->delete();

            Log::channel('abuse')->alert("DELETED POST");

            return redirect()->route("user-posts")->with('success','Post deleted!');

        }catch (\Exception $e){
            return redirect()->route("edit-post",$id)->with('error',$e->getMessage());

        }
    }


}
