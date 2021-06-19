<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class OsnovniController extends Controller
{
    public $data;

    public function __construct()
    {
        //dd(Session::get('user'));
        $this->data['menu']=Menu::all();
        $this->data['admin']=User::find(Session::get('user')->id);
        $this->data['categories']=Categories::all();
    }
}
