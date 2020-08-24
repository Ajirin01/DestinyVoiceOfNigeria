<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon as Carbon;

class dashboardController extends Controller
{
    public function dashboard(){

        $User = new User;

    
        // $all_users = $User::all()->where('role','user')->where('status','active');
        // $pending_students = $Profile::all()->where('role','student')->where('status','inactive');
        // $all_courses = $Course::all();
        // $all_blog_posts = $Blog::all();
        // $all_students = $Profile::paginate(8)->where('role','student');
        // $new_users = $User::paginate(10);

        // $number_of_active_users = $all_users->count();
        // $number_of_pending_students = $pending_students->count();
        // $number_of_courses = $all_courses->count();
        // $number_of_posts = $all_blog_posts->count();

        // $profile_to_update_status = $Profile::all()->where('role','student');
        // foreach($profile_to_update_status as $profile){
        //     $expires_at = $profile->expires_at;
        //     $today = Carbon::today();
        //     if($today->gt($expires_at) || $today->eq($expires_at)){
        //         $profile->status = 'inactive';
        //         $profile->save();
        //     }else{
        //         $profile->status = 'active';
        //         $profile->save();
        //     }
        // }

        // // echo $all_users .'<br><br>';
        // // echo $pending_students;
        return view('Admin.dashboard'
            // ['users_number'=>$number_of_active_users,
            // 'courses_number'=>$number_of_courses,
            // 'post_number'=>$number_of_posts,
            // 'pending_students_number'=>$number_of_pending_students,
            // 'profiles' =>$all_profile,
            // 'students' =>$all_students,
            // 'users' =>$new_users
            // ]
        );
    }
}
