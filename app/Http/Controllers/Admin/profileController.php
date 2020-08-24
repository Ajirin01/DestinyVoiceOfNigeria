<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile as Profile;
use App\User;
use Validator;
use Auth;
use Carbon\Carbon;
use	Illuminate\Support\Facades\Storage;

class profileController extends Controller
{

    public function index()
    {
        $auth_user = Auth::user()->id;
        return redirect('admin/profile/'.$auth_user);
    }

    public function show($id)
    {
        $User = new User;
        $user = $User::findOrFail($id);
        $user_profile = $User::find($id)->profile;
        return view('Admin.Profile.my-profile',['profile'=>$user_profile, 'user'=>$user]);
    }


    public function edit($id)
    {
        $Profile = new Profile; $User = new User;
        $profile_to_edit = $Profile::findOrFail($id);
        $user = $profile_to_edit->user;
        // echo $user;
        return view('Admin.Profile.edit-profile',['profile'=>$profile_to_edit, 'user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $Profile = new Profile;
        $profile_to_update = $Profile::findOrFail($id);
        $rules = [
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'DOB' => 'required',
            'gender' => 'required',
            'address' => 'required|min:10|max:100',
            'profile_photo' => 'required',
            'status' => 'required',
            'role' => 'required',
            'expires_at' => 'required|min:1|max:4',
            'phone'=> 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('profile_photo')){
                $image = $request->file('profile_photo');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'profile_photo'.rand(123456789,999999999).'.'.$image_extension;
                $path = $request->file('profile_photo')->storeAs('public/uploads', $image_name );
                $expires_in = $request->get('expires_at');
                $profile_image = $image_name;
                $today = Carbon::today();
                $expires_at = $today->addDays($expires_in);
                
                $update_profile = $profile_to_update->update([
                    'first_name' => $request->get('first_name'),
                    'last_name' =>  $request->get('last_name'),
                    'DOB' =>  $request->get('DOB'),
                    'gender' =>  $request->get('gender'),
                    'address' =>  $request->get('address'),
                    'profile_photo' =>  $profile_image,
                    'status' =>  $request->get('status'),
                    'phone'=>  $request->get('phone'),
                    'expires_at' =>  $expires_at
                ]);
                if($update_profile){
                    return redirect()->back()->with('msg','profile was successfully update!');
                }
                }else{
                    return redirect()->back()->with('error','ERROR! could not update profile!');
                }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
