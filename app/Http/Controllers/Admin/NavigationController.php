<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNavRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class NavigationController extends OsnovniController
{
    public function index(){
        $this->data['nav']=Menu::all()->whereNotIn('role_id',[2]);
        return view('admin.pages.navigation',$this->data);
    }

    public function create(){
        return view('admin.pages.add-navigation',$this->data);
    }

    public function edit($id){
        $this->data['nav']=Menu::find($id);
        return view('admin.pages.edit-navigation',$this->data);
    }


    public function store(StoreNavRequest $request){

        try{

            if($request->get('roles')==1){
                Menu::create([
                    'name'=>$request->get('name'),
                    'route'=>$request->get('route'),
                    'role_id'=>$request->get('roles')
                ]);
                return redirect()->route("all.nav")->with('success','Navigation Link Added!');
            }else if($request->get('roles')==2){

                Menu::create([
                    'name'=>$request->get('name'),
                    'route'=>$request->get('route'),
                    'role_id'=>null
                ]);
                return redirect()->route("all.nav")->with('success','Navigation Link Added!');
            }


        }catch (\Exception $e){
            return redirect()->route("posts.create")->with('error',$e->getMessage());

        }

    }

    public function update(Request $request,$id){

        try{

            if($request->get('roles')==1){
                Menu::find($id)->update([
                    'name'=>$request->get('name'),
                    'route'=>$request->get('route'),
                    'role_id'=>$request->get('roles')
                ]);

            }else if($request->get('roles')==2){

                Menu::find($id)->update([
                    'name'=>$request->get('name'),
                    'route'=>$request->get('route'),
                    'role_id'=>null
                ]);

            }

            return redirect()->route("all.nav")->with('success','Navigation Link Edited!');

        }catch (\Exception $e){
            return redirect()->route("all.nav")->with('error',$e->getMessage());

        }

    }

    public function destroy($id){
        try{

            Menu::find($id)->delete();
            return redirect()->route("all.nav")->with('success','Navigation link deleted!');

        }catch (\Exception $e){
            return redirect()->route("all.nav")->with('error',$e->getMessage());

        }
    }
}
