<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog as Blog;
use Validator;
use	Illuminate\Support\Facades\Storage;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blog = new Blog;
        $all_posts = Blog::paginate(9);
        return view('Admin.Blog.blog-dashboard',['posts'=>$all_posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Blog.blog-creation-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Blog = new Blog;

        $rules = [
            'post_title'=> 'required|min:10|max:100',
            'post_description'=> 'required|min:10|max:1000',
            'post_image'=> 'required',
            'post_tag'=> 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else{
            if($request->hasFile('post_image')){
                $image = $request->file('post_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'post_image'.rand(123456789,999999999).'.'.$image_extension;
                // $upload_path = public_path('uploads/');
                $path = $request->file('post_image')->storeAs('public/uploads', $image_name );

    
                $post_title = $request->get('post_title');
                $blog_description = $request->get('post_description');
                $blog_image = $image_name;
                $blog_tag = $request->get('post_tag');
    
                $create_blog_post = Blog::create(['blog_title'=>$post_title,
                 'blog_description'=>$blog_description,
                 'blog_image'=>$blog_image,
                 'blog_tag'=>$blog_tag]);
    
                if($create_blog_post->save()){
                    // $image->move($upload_path, $image_name);
                    return redirect()->back()->with('msg','post was successfully created!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not create post!');
            }
        }

        
    }

    public function edit($id)
    {
        $Blog = new Blog;
        $blog = Blog::find($id);
        return view('Admin.Blog.edit-blog',['post'=> $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Blog = new Blog;
        $blog = Blog::find($id);

        $rules = [
            'post_title'=> 'required|min:10|max:100',
            'post_description'=> 'required|min:10|max:1000',
            'post_image'=> 'required',
            'post_tag'=> 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else{
            if($request->hasFile('post_image')){
                $image = $request->file('post_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'post_image'.rand(123456789,999999999).'.'.$image_extension;
                $path = $request->file('post_image')->storeAs('public/uploads', $image_name );
    
                $post_title = $request->get('post_title');
                $blog_description = $request->get('post_description');
                $blog_image = $image_name;
                $blog_tag = $request->get('post_tag');
    
                $update_blog_post = $blog->update(['blog_title'=>$post_title,
                 'blog_description'=>$blog_description,
                 'blog_image'=>$blog_image,
                 'blog_tag'=>$blog_tag]);
    
                if($update_blog_post){
                    return redirect()->back()->with('msg','post was successfully updated!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not update post!');
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
        $Blog = new Blog;
        $blog = Blog::firstOrFail('id',$id);
        $delete_blog = $blog->delete();
        if($delete_blog){
            Storage::delete('public/uploads/'.$blog->blog_image);
            return redirect()->back()->with('msg','post was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete post!');
        }
    }
}
