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
                return redirect()->back()->with('msg','Country(s) was successfully created!');
            }else{
                return redirect()->back()->with('msg','Country(s) could not be successfully created!');
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
            'country_name' => 'required|min:5|max:50',
            'country_code' => 'required|max:50',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else{
            $country_name = $request->country_name;
            $country_code = $request->country_code;
            $create_country= $Country->update(['country_name'=>$country_name,
            'country_code'=>$country_code]);

            if($create_country){
                return redirect()->back()->with('msg','Country was successfully Updated!');
            }else{
                return redirect()->back()->with('error','ERROR! could not update country!');
            }
        }
    }

    public function destroy($id)
    {
        $Country = new Country;
        $country = Country::where('id',$id)->first();
        $delete_country= $country->delete();
        if($delete_country){
            return redirect()->back()->with('msg','Country was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete country!');
        }
    }
}
