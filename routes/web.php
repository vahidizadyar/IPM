<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;


Route::get('/', 'IndexController@index')->name('main');
Route::get('/downloads', function (){
    $breadcrumb = "دانلود";
    $titleHeader = "فایل های برای دانلود";

    return view("download_page",compact('breadcrumb','titleHeader'));
})->name('download');
Route::get('/event/calender', function (){
    $breadcrumb = "تاریخ رویداد ها";
    $titleHeader = "نمایش تاریخ بر گذاری رویدادها";

    return view("event_calender",compact('breadcrumb','titleHeader'));
})->name('event.calender');
Route::get('/contact_us/', 'MessageController@create')->name('message.create');
Route::post('/contact_us/', 'MessageController@store')->name('message.store');
Route::get('/users', 'UserController@usersIndex')->name('user.index');
Route::post('/users', 'UserController@usersIndex')->name('user.search');
Route::get('/search/', 'IndexController@search')->name('search');
Route::post('/search', 'IndexController@search')->name('search.post');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register/store', 'AuthController@postRegister')->name('register.store');
Route::get('/event/{id}', 'EventController@show')->name("event");
Route::get('/events/', 'EventController@index')->name("events");
Route::get('/profile/{slug}', 'ProfileController@show')->name("profile");
Route::post('/login', 'AuthController@postLogin')->name('login.post');
Route::get('/login', 'AuthController@Login')->name('login')->middleware('guest');
Route::get('about-us', 'IndexController@about_us')->name('about-us');
Route::get('news/{news}', 'NewsController@show')->name('news.show');
Route::middleware('auth')->group(function () {
    Route::get('logout', 'UserController@logout')->name('logout');
    Route::post('/logout', 'UserController@logout')->name('logout.post');
    Route::middleware('checkAdmin')->group(function (){
        Route::prefix('/cms/')->group(function () {

            Route::get('/', 'IndexController@cms')->name('cms.index');

            Route::get('news/', 'NewsController@indexCms')->name('news.index');
            Route::get('news/create', 'NewsController@create')->name('news.create');
            Route::get('news/{news}/edit', 'NewsController@edit')->name('news.edit');
            Route::post('news/store', 'NewsController@store')->name('news.store');
            Route::post('news/{news}/delete', 'NewsController@destroy')->name('news.delete');
            Route::post('news/{news}/update', 'NewsController@update')->name('news.update');
            //------
            Route::get('events/', 'EventController@indexCms')->name('event.index');
            Route::get('events/create', 'EventController@create')->name('event.create');
            Route::get('events/{event}/edit', 'EventController@edit')->name('event.edit');
            Route::post('events/store', 'EventController@store')->name('event.store');
            Route::post('events/{event}/delete', 'EventController@destroy')->name('event.delete');
            Route::post('events/{event}/update', 'EventController@update')->name('event.update');
            //------
            Route::get('messages/', 'MessageController@index')->name('message.index');
            Route::post('messages/{message}/delete', 'MessageController@destroy')->name('message.delete');
            //------
            Route::get('jobs','JobController@indexCms')->name("cms.job.index");
            Route::post('jobs','JobController@indexCms')->name("cms.job.index");
            Route::get('job/{id}','JobController@showCms')->name("cms.job.show");
            Route::post('job/state/store/{id}','JobController@storeCms')->name('cms.job.store');
            Route::post('job//{id}/delete','JobController@destroyCms')->name('cms.job.destroy');
            //------
            Route::get('users','UserController@indexCms')->name('cms.user.index');
            Route::post('users','UserController@indexCms')->name('cms.user.index');
            Route::post('user/{id}/confirm','UserController@active')->name('cms.user.active');
            Route::get('user/{id}/edit','UserController@edit')->name('cms.user.edit');
            Route::post('user/updateAdm','UserController@UpdateAdm')->name('user.updateAdm');
            Route::post('user/search','UserController@search')->name('user.search');
//            Route::post('user/{id}/destroy','UserController@destroy')->name('cms.user.del');
            //------
            Route::get('passedCourse/{id}/edit','PassedCoursesController@edit')->name('PassedCourses.edit');
            Route::get('passedCourses','PassedCoursesController@index')->name('PassedCourses');
            Route::post('passedCourse/{id}/del','PassedCoursesController@destroy')->name('PassedCourses.del');
            Route::get('passedCourse/create','PassedCoursesController@create')->name('PassedCourses.create');
            Route::post('passedCourse/store','PassedCoursesController@store')->name('PassedCourses.store');
            Route::post('passedCourse/{id}/update','PassedCoursesController@update')->name('PassedCourses.update');
            Route::post('passedCourse/bycat','PassedCoursesController@getCouseByCat')->name('PassedCourses.bycats');
            Route::get('ManageCourses','PassedCoursesController@relationUserCourse')->name('ManageCourses');
            Route::get('userPassedCourse/{id}','PassedCoursesController@PassedCoursesByUser')->name('PassedCourses.byUser');
            Route::post('userPassedCourse/del','PassedCoursesController@destroyCourseForUser')->name('PassedCourses.byUser.del');

        });
    });
});


Route::post('/user/update', 'UserController@Update')->name('user.update');


Route::post("/applyJob","RequestController@store")->name("applyJob");
Route::get('news', 'NewsController@index')->name('news');

Route::resource("job","JobController");

Route::post('/event/list','EventController@indexJs')->name('event.list');
Route::get('callback','IndexController@callback')->name('callback');
Route::get('bank','IndexController@bank')->name('bank');
