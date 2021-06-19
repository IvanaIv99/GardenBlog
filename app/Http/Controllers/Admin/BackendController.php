<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\OsnovniController;
use App\Models\Comments;
use App\Models\Menu;
use App\Models\Categories;
use App\Models\Post;
use App\Models\User;

use App\Models\Visits;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class BackendController extends OsnovniController
{


    public function index(Request $request){

        $this->data['total_active_users']=User::all()->count();
        $this->data['total_nonactive_users']=User::onlyTrashed()->count();
        $this->data['total_posts']=Post::all()->count();
        $this->data['total_comments']=Comments::all()->count();

        $logModel=new \App\Models\LogActivity();
        //$this->data['logs']=$logModel->paginate(15);

        if($request->has('start') && $request->has('end')){

            $start=$request->get('start');
            $end=$request->get('end');

            $this->data['logs']=$logModel
                ->where('user_id','!=',Session::get('user')->id)
                ->whereDate('created_at','>=',$start.' 00:00:00')
                ->whereDate('created_at','<=',$end.' 00:00:00')
                ->paginate(10);
        }else{
            $this->data['logs']=$logModel->where('user_id','!=',Session::get('user')->id)->paginate(10);
        }



        return view('admin.pages.dashboard',$this->data);
    }


}
