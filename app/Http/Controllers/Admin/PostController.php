<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Categories;
use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends OsnovniController
{
    public function index(){

        $this->data['posts']=Post::with('user','category','visits','comments')->paginate(5);

        return view('admin.pages.posts', $this->data);
    }

    public function userPosts($id){

        $this->data['posts']=Post::with('user','category','visits','comments')
            ->where('user_id','=',$id)
            ->paginate(5);

        return view('admin.pages.posts', $this->data);
    }

    public function create(){
        return view('admin.pages.add-post',$this->data);
    }

    public function store(Request $request){

        try{

            $photo=$request->file('thumbPhoto');
            $rePhoto=time().'.'.$photo->getClientOriginalExtension();
            $dest=public_path('/images/gardening');
            $photo->move($dest,$rePhoto);

            $content=$request->input('content');
            $userId=\Session::get('user')->id;

            Post::create([
                'title'=>$request->title,
                'category_id'=>(int)$request->category,
                'content'=>$content,
                'thumbPhoto'=>$rePhoto,
                'user_id'=>$userId
            ]);

            return redirect()->route("posts.create")->with('success','Added!');

        }catch (\Exception $e){
            return redirect()->route("posts.create")->with('error',$e->getMessage());

        }

    }


    public function edit($id){

        $this->data['post']=Post::with('category')->find($id);
        return view('admin.pages.edit-post',$this->data);
    }

    public function update(UpdatePostRequest $request,$id){

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
                    'thumbPhoto'=>$rePhoto
                ]);

            }else{


                $content=$request->input('content');

                Post::find($id)->update([
                    'title'=>$request->title,
                    'category_id'=>(int)$request->category,
                    'content'=>$content
                ]);

            }

            return redirect()->route("post.edit",$id)->with('success','Updated!');

        }catch (\Exception $e){
            return redirect()->route("post.edit",$id)->with('error',$e->getMessage());

        }
    }

    public function destroy($id){
        try{

            Comments::where('post_id','=',$id)->delete();
            Post::find($id)->delete();
            return redirect()->route("posts")->with('success','Post deleted!');

        }catch (\Exception $e){
            return redirect()->route("posts")->with('error',$e->getMessage());

        }
    }

    public function search(Request $request){
        $text=$request->text;
        $postData= Post::with('user','category','visits','comments')
            ->where('title','like', '%'.$text.'%')
            ->paginate(5);


        return response()->json($postData);
    }

    public function sort(Request $request){
        $sort=$request->sortval;
        $postData= Post::with('user','category','visits','comments')->orderBy('created_at',$sort)
            ->paginate(5);


        return response()->json($postData);
    }
}
