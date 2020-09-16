<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article as Article;
use Validator;
use	Illuminate\Support\Facades\Storage;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getArticles($article_type){
        $Articles = new Article;
        $articles = $Articles::where('article_type',$article_type)->paginate(9);
        return $articles;
    }
    public function index(Request $request)
    {
        $article_type = $request->get('article_type');
        if($article_type == 'nigerians-at-home-achievers'){
            $articles = articleController::getArticles($article_type);
            return view('Admin.Article.article-dashboard',['article_type'=>$article_type,'articles'=>$articles]);

        }else{
            echo 'Error';
        }
        // $Article = new Article;
        // $all_articles = Article::paginate(9);
        // return view('Admin.Article.article-dashboard',['articles'=>$all_articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Article.article-creation-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request->all());
        // exit;
        $Article = new Article;

        $rules = [
            'article_type'=>'required',
            'article_title'=> 'required|min:10|max:100',
            'article_intro_image'=> 'required',
            'article_intro'=> 'required|min:100|max:1000',
            'article_description'=> 'required|min:200|max:5000',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else{
            if($request->hasFile('article_intro_image')){
                $image = $request->file('article_intro_image');
                // $image_extension = $image->getClientOriginalExtension();
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'article_intro_image'.rand(123456789,999999999).'.'.$image_extension;
                // $upload_path = public_path('uploads/');
                $path = $request->file('article_intro_image')->storeAs('public/uploads', $image_name );

                $article_type = $request->get('article_type');
                $article_title = $request->get('article_title');
                $article_intro_image = $image_name;
                $article_intro = $request->get('article_intro');
                $article_description = $request->get('article_description');
    
                $create_article_article = Article::create([
                    'article_type'=>$article_type,
                    'article_title'=>$article_title,
                    'article_intro_image'=>$article_intro_image,
                    'article_intro'=>$article_intro, 
                    'article_description'=>$article_description]);
    
                if($create_article_article->save()){
                    // $image->move($upload_path, $image_name);
                    return redirect()->back()->with('msg','article was successfully created!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not create article!');
            }
        }

        
    }

    public function edit($id)
    {
        $Article = new Article;
        $article = Article::find($id);
        return view('Admin.Article.edit-article',['article'=> $article]);
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
        $Article = new Article;
        $article = Article::find($id);

        $rules = [
            'article_title'=> 'required|min:10|max:100',
            'article_description'=> 'required|min:10|max:1000',
            'article_image'=> 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else{
            if($request->hasFile('article_image')){
                $image = $request->file('article_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'article_image'.rand(123456789,999999999).'.'.$image_extension;
                $path = $request->file('article_image')->storeAs('public/uploads', $image_name );
    
                $article_title = $request->get('article_title');
                $article_description = $request->get('article_description');
                $article_image = $image_name;
                $article_tag = $request->get('article_tag');
    
                $update_article_article = $article->update(['article_title'=>$article_title,
                 'article_description'=>$article_description,
                 'article_image'=>$article_image,
                 'article_tag'=>$article_tag]);
    
                if($update_article_article){
                    return redirect()->back()->with('msg','article was successfully updated!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not update article!');
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
        $Article = new Article;
        $article = Article::firstOrFail('id',$id);
        $delete_article = $article->delete();
        if($delete_article){
            Storage::delete('public/uploads/'.$article->article_image);
            return redirect()->back()->with('msg','article was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete article!');
        }
    }
}
