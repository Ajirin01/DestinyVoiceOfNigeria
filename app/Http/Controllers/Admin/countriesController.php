<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country as Country;
use Validator;

class countriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Country = new Country;
        $all_countries = Country::paginate(10);
        return view('Admin.Countries.country-dashboard', ['countries' => $all_countries]);
    }
    public function create()
    {
        return view('Admin.Countries.country-creation-form');
    }

    public function store(Request $request)
    {
        $countries = (['country_name' => $request->country_name, 'country_code' => $request->country_code]);
        $Country = new Country;
        $size_countries = count($countries['country_name']);
        $loop_times = $size_countries;
        if($countries['country_name'] == [null] || $countries['country_code'] == [null]){
            return redirect()->back()->with('errors','Error! Please fill up all fields');
        }else{
            $created = false;
            for($i=0; $i < $loop_times; $i++){
                $country_name = $countries['country_name'][$i];
                $country_code = $countries['country_code'][$i];
                if($country_name == null || $country_code == null){
                    if($i == 0){
                        $error = "country ".($i+1)." could not be successfully added to record because country name or country code can not be empty!";    
                    }else{
                        $error = "country ".($i+1)." could not be successfully added to record because country name or country code can not be empty! NB: OTHERS MAY HAVE BEEN CREATED SUCCESSFULLY";                       
                    }
                    return redirect()->back()->with('errors',$error);
                }else{
                    $country = Country::where('country_code',$country_code)->first();
                    if($country != null){
                        $error = 'country "'.$country_name.'" could not be successfully added to record because country code "'.$country_code.'" already exists!';
                        return redirect()->back()->with('errors',$error);
                    }else{
                        $create_country = Country::create(['country_name'=> $country_name,
                        'country_code' => $country_code]);
                        if($create_country->save()){
                            $created = true;
                        }else{
                            $created = false;
                        }
                    }
                }
                
            }
            if($created){
                return redirect()->back()->with('msg','country was successfully created!');
            }else{
                return redirect()->back()->with('msg','country could not be successfully created!');
            }
        }
    }

    public function edit($id)
    {
        $Country = new Country;
        $country = Country::findOrFail($id);
        return view('Admin.Countries.edit-country', ['country'=> $country]);
    }

    public function update(Request $request, $id)
    {
        $Country = new Country;
        $Country = Country::findOrFail($id);
        $rules = [
            'course_title' => 'required|min:5|max:50',
            'course_image' => 'required',
            'course_description' => 'required|min:20|max:400'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('course_image')){
                $image = $request->file('course_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'course_image'.rand(123456789,999999999).'.'.$image_extension;
                $path = $request->file('course_image')->storeAs('public/uploads', $image_name );
    
                $course_title = $request->get('course_title');
                $course_description = $request->get('course_description');
                $course_image = $image_name;
                $create_country= $Country->update(['course_title'=>$course_title,
                 'course_description'=>$course_description,
                 'course_image'=>$course_image]);
    
                if($create_course){
                    return redirect()->back()->with('msg','country was successfully Updated!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not update country!');
            }
        }
    }

    public function destroy($id)
    {
        $Country = new Country;
        $country = Country::firstOrFail('id',$id);
        $delete_country= $country->delete();
        if($delete_course){
            return redirect()->back()->with('msg','post was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete country!');
        }
    }
}
