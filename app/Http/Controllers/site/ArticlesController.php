<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country as Country;

class ArticlesController extends Controller
{
    

    public function index($type){
        function getArticles($model){
            $model = $model;
            $model_instance = new $model;
            $articles = $model_instance::all();
            return $articles;
        }

        if($type == "lifestyles"){
            // $data = getArticles("model name comes in here");
            $data = getArticles("App\Country");
            // $test = getArticles("App\Country");
            // echo json_encode($test);
            // exit;
            return view('site.articles-index',['data'=>$data, 'title'=> 'Know About Nigeria', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }elseif($type == "nigerians-at-home-achievers"){
            $title = "MEET NIGERIAN ACHIEVERS AT HOME";
            return view('site.articles-index',['title'=> $title, 'error'=>false, 'upper'=>true, 'lower'=>true]);
        }else{
            $error = "Ops! Article does not exist";
            return view('site.articles-index',['title'=> $error, 'error'=>true, 'upper'=>false, 'lower'=>false]);
        }
        
    }

    public function details($type, $article){
        function getArticles($model){
            return $model;
        }

        if($type == "nigerians-at-home-achievers"){
            $data = getArticles("App\Country");
            return view('site.article-details',['data'=>$data, 'title'=> 'Know About Nigeria article 1', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }elseif($type == "invest-in-nigeria"){
            return view('site.article-details',['title'=> 'Invest in Nigeria article 1', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }else{
            $error = "Ops! Article does not exist";
            return view('site.article-details',['title'=> $error, 'error'=>true, 'upper'=>false, 'lower'=>false]);
        }
    }

}
