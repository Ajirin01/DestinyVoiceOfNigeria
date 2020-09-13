<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/upload-tinymce', function(Request $request){
    $accepted_origin = array("http://localhost:8000", "http://localhost:5500");
    
    if($request->has('file')){
        $image = $request->file('file');
        $image_name = $image->getClientOriginalName();

        if(isset($_SERVER['HTTP_ORIGIN'])){
            if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origin)){
                header('Access-Control-Allow-Origin' . $_SERVER['HTTP_ORIGIN']);
            }else{
                header('HTTP/1.1 403 Origin Denied');
                return;
            }
        }

        if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $image_name)){
            header("HTTP/1.1 400 Invalid file name.");
            return;
        }

        if(!in_array(strtolower(pathinfo($image_name, PATHINFO_EXTENSION)), array('gif', 'jpg', 'png', 'jpeg'))){
            header("HTTP/1/1 400 Invalid extention");
            return;
        }

        $filetowrite = $request->file('file')->storeAs('public/uploads', $image_name );

        $location = "/storage/uploads/".$image_name;
        echo json_encode(array('location' => $location));
    }else{
        header("HTTP/1.1 500 server Error");
    }

});
