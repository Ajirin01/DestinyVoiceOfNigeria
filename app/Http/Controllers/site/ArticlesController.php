<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    

    public function index($type){
        function getArticles($model){
            return $model;
        }

        if($type == "know-about-nigeria"){
            $data = getArticles("model name comes in here");
            return view('site.articles-index',['data'=>$data, 'title'=> 'Know About Nigeria', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }elseif($type == "invest-in-nigeria"){
            return view('site.articles-index',['title'=> 'Invest in Nigeria', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }else{
            $error = "Ops! Article does not exist";
            return view('site.articles-index',['title'=> $error, 'error'=>true, 'upper'=>false, 'lower'=>false]);
        }
        
    }

    public function details($type, $article){
        function getArticles($model){
            return $model;
        }

        if($type == "know-about-nigeria"){
            $data = getArticles("model name comes in here");
            return view('site.article-details',['data'=>$data, 'title'=> 'Know About Nigeria article 1', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }elseif($type == "invest-in-nigeria"){
            return view('site.article-details',['title'=> 'Invest in Nigeria article 1', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }else{
            $error = "Ops! Article does not exist";
            return view('site.article-details',['title'=> $error, 'error'=>true, 'upper'=>false, 'lower'=>false]);
        }
    }

}
