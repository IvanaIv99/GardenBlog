<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Menu;
use App\Models\Socials;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class OsnovniController extends Controller
{
    public $data;

    public function __construct()
    {
        //NAV

        $this->data["nav"]=\DB::table('menus')->where('role_id',"=",null)->get();

        $this->data["userNav"]=\DB::table('menus')->where('role_id',"=",1)->get();

        $this->data["adminNav"]=\DB::table('menus')->where('role_id',"=",2)->get();


        //SIDEBAR
        $this->data['allposts']=Post::count();

        $this->data['categories']=Categories::with('posts')->get();

        $this->data['top3posts']=Post::with('category','visits')->latest()->limit(3)->get();

        //SOCIALS

        $this->data["socials"]=Socials::all();




    }

}
