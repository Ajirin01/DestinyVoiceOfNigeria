<?php
use Illuminate\Http\Request;
use App\country as Country;

Route::get('/', function () {
    return view('site.home');
});

Route::post('/register-next', function(Request $request){
    $Country = new Country;
    $single_country = $Country::where('country_code', $request->country)->first();

    Session::put('firstname', $request->firstname);
    Session::put('lastname', $request->lastname);
    Session::put('address', $request->address);
    Session::put('country', $single_country->country_name);
    Session::put('phone', $request->phone);
    return view('auth.register-next');
})->name('next');

Auth::routes();

Route::get('/foo', function(){
    // Artisan::call('storage:link');
    File::link(storage_path('app/public'), public_path('storage'));
});

Route::post('/upload-tinymce', function(Request $request){
    $accepted_origin = array("http://localhost:8000", "http://transcript.mudospharmacy.com");
    
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


Route::prefix('admin')->group(function(){
        Route::get('dashboard', 'Admin\dashboardController@dashboard');
        Route::get('calender', 'Admin\calendarController@showCalender');
        Route::resource('adverts', 'Admin\advertsController');
        Route::resource('users', 'Admin\usersController')->middleware('admin');
        Route::resource('country', 'Admin\countriesController');
        Route::resource('blog', 'Admin\blogController')->middleware('admin');
        Route::resource('article', 'Admin\articleController');
        Route::resource('profile', 'Admin\profileController')->middleware('admin');
}); 

Route::get('/home', function () {
    return redirect('/');
})->name('home');

Route::get('/about', function () {
    return view('site.about',['title'=> 'ABOUT US']);
})->name('home');

Route::prefix('articles')->group(function () {
    Route::get('/{type}',	'site\ArticlesController@index')->name('articles-list');
    Route::get('/{type}/{article}',	'site\ArticlesController@details')->name('articles-details'); 
}); 



