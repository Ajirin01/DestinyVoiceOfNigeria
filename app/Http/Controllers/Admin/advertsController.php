<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advert as Advert;
use Validator;
use	Illuminate\Support\Facades\Storage;

class advertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Advert = new Advert;
        $all_adverts = Advert::paginate(10);
       return view('Admin.Adverts.adverts-dashboard', ['adverts' => $all_adverts]);
    }

    public function create()
    {
        return view('Admin.Adverts.advert-creation-form');
    }

    public function store(Request $request)
    {
        $Advert = new Advert;
        $rules = [
            'advert_title' => 'required|min:5|max:50',
            'advert_image' => 'required',
            'advert_description' => 'required|min:20|max:200'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('advert_image')){
                $image = $request->file('advert_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'advert_image'.rand(123456789,999999999).'.'.$image_extension;
                $path = $request->file('advert_image')->storeAs('public/uploads', $image_name );
    
                $advert_title = $request->get('advert_title');
                $advert_description = $request->get('advert_description');
                $advert_image = $image_name;
                $create_advert = Advert::create(['advert_title'=>$advert_title,
                 'advert_description'=>$advert_description,
                 'advert_image'=>$advert_image]);
    
                if($create_advert->save()){
                    return redirect()->back()->with('msg','advert was successfully created!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not create advert!');
            }
        }

        
        
    }

    public function edit($id)
    {
        $Advert = new Advert;
        $advert = Advert::findOrFail($id);
        return view('Admin.Adverts.edit-advert', ['advert'=> $advert]);
    }

    public function update(Request $request, $id)
    {
        $Advert = new Advert;
        $Advert = Advert::findOrFail($id);
        $rules = [
            'advert_title' => 'required|min:5|max:50',
            'advert_image' => 'required',
            'advert_description' => 'required|min:20|max:100'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('advert_image')){
                $image = $request->file('advert_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'advert_image'.rand(123456789,999999999).'.'.$image_extension;
                $path = $request->file('advert_image')->storeAs('public/uploads', $image_name );
    
                $advert_title = $request->get('advert_title');
                $advert_description = $request->get('advert_description');
                $advert_image = $image_name;
                $create_advert = $Advert->update(['advert_title'=>$advert_title,
                 'advert_description'=>$advert_description,
                 'advert_image'=>$advert_image]);
    
                if($create_advert){
                    return redirect()->back()->with('msg','advert was successfully Updated!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not update advert!');
            }
        }
    }

    public function destroy($id)
    {
        $Advert = new Advert;
        $advert = Advert::firstOrFail('id',$id);
        $delete_advert = $advert->delete();
        if($delete_advert){
            return redirect()->back()->with('msg','post was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete advert!');
        }
    }
}
