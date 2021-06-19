<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSocialsRequest;
use App\Http\Requests\UpdateSocialsRequest;
use App\Models\Socials;
use Illuminate\Http\Request;

class SocialsController extends OsnovniController
{

    public function index()
    {
        $this->data['socials']=Socials::all();
        return view('admin.pages.socials',$this->data);
    }

    public function create()
    {
        return view('admin.pages.add-socials',$this->data);
    }

    public function store(AddSocialsRequest $request)
    {
        try{

            Socials::create([
                'name'=>$request->get('name'),
                'url'=>$request->get('url'),
                'icon'=>$request->get('icon')
            ]);

            return redirect()->route("all.socials")->with('success','Social link added!');

        }catch (\Exception $e){
            return redirect()->route("all.socials")->with('error',$e->getMessage());

        }

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $this->data['soc']=Socials::find($id);
        return view('admin.pages.edit-socials',$this->data);
    }


    public function update(UpdateSocialsRequest $request, $id)
    {
        try{

            Socials::find($id)->update([
                'name'=>$request->get('name'),
                'url'=>$request->get('url'),
                'icon'=>$request->get('icon')
            ]);

            return redirect()->route("all.socials")->with('success','Social link updated!');

        }catch (\Exception $e){
            return redirect()->route("all.socials")->with('error',$e->getMessage());

        }
    }


    public function destroy($id){
        try{

            Socials::find($id)->delete();
            return redirect()->route("all.nav")->with('success','Navigation link deleted!');

        }catch (\Exception $e){
            return redirect()->route("all.nav")->with('error',$e->getMessage());

        }
    }
}
