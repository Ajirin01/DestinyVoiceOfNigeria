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



