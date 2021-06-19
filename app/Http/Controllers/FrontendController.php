<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\User;
use App\Models\Categories;

use App\Models\Visits;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Session;
use \Psy\Util\Json;



class FrontendController extends OsnovniController
{
    const PRODUCTS_LIMIT = 3;

    public function index(){

        $this->data['posts']=Post::with('category','visits','user')->paginate(self::PRODUCTS_LIMIT);


      return view('front.pages.home',$this->data);
    }


    public function contact(){
        return view('front.pages.contact',$this->data);
    }

    public function author(){
        return view('front.pages.author',$this->data);
    }


    public function showLoginForm(){
        return view('front.pages.login',$this->data);
    }

    public function showRegisterForm(){
        return view('front.pages.register',$this->data);
    }

}
