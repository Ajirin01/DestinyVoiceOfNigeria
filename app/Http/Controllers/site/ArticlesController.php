<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country as Country;
use App\Article as Article;

class ArticlesController extends Controller
{
    

    function getArticles($article_type){
        $Articles = new Article;
        $articles = $Articles::where('article_type',$article_type)->paginate(12);
        return $articles;
    }
    public function index($type){
        if($type == "lifestyles"){
            $title = "Lifestyles";
            $articles = ArticlesController::getArticles($type);
            return view('site.articles-index',['title'=> $title, 'articles'=> $articles, 'error'=> false, 'upper'=> false, 'lower'=> true]);
        }elseif($type == "nigerians-at-home-achievers"){
            $title = "MEET NIGERIAN ACHIEVERS AT HOME";
            $articles = ArticlesController::getArticles($type);
            return view('site.articles-index',['title'=> $title, 'articles'=> $articles, 'error'=> false, 'upper'=> true, 'lower'=> true]);
        }else{
            $error = "Ops! Article does not exist";
            return view('site.articles-index',['title'=> $error, 'error'=> true, 'upper'=> false, 'lower'=> false]);
        }
        
    }

    public function details($type, $article){
        function getArticles($model){
            return $model;
        }

        if($type == "nigerians-at-home-achievers"){
            $data = getArticles("App\Country");
            return view('site.article-details',['data'=>$data, 'title'=> 'Know About Nigeria article 1', 'error'=>false, 'upper'=>false, 'lower'=>true]);
        }elseif($type == "nigerians-in-diaspora-achievers"){
            return view('site.article-details-akeem',['title'=> 'Invest in Nigeria article 1', 'error'=>false, 'upper'=>true, 'lower'=>true]);
        }else{
            $error = "Ops! Article does not exist";
            return view('site.article-details',['title'=> $error, 'error'=>true, 'upper'=>false, 'lower'=>false]);
        }
    }

}
