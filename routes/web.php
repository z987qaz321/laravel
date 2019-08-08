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

Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'result', 'namespace' => 'Frontend'], function () {
    Route::resource('news', 'NewsController', ['only' => ['index']]);
    Route::resource('process', 'ProcessController', ['only' => ['index']]);
    Route::resource('display', 'DisplayController', ['only' => ['index','show']]);
    Route::resource('award', 'AwardController', ['only' => ['index']]);
    Route::resource('album', 'AlbumController', ['only' => ['index']]);
});

Route::group(['namespace' => 'Login'], function () {
    Route::get('login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@postLogin')->name('postlogin');
    Route::get('logout', 'LoginController@getLogout')->name('logout');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'checkAuth:0'], function () {
    Route::resource('account', 'AccountController');
    Route::resource('/info/team', 'TeamController');
    Route::resource('/info/teacher', 'TeacherController');
    Route::resource('/info/judge', 'JudgeController');
    Route::resource('/designate/first_test', 'FirstTestController');
    Route::resource('/designate/retest', 'RetestController');
    Route::resource('management_news', 'NewsController');
    Route::resource('management_process', 'ProcessController');
    Route::resource('management_award', 'AwardController');
    Route::resource('management_album', 'AlbumController');
    Route::resource('/score/score_first_test', 'ScoreFirstTestController', ['only' => ['index','show']]);
    Route::resource('/score/score_retest', 'ScoreRetestController', ['only' => ['index','show']]);
    Route::resource('/score/rank', 'RankController', ['only' => ['index']]);
});


Route::group(['prefix' => 'team','namespace' => 'Team', 'middleware' => 'checkAuth:1'], function () {
    Route::resource('team_display', 'TeamDisplayController', ['only' => ['index','edit','update']]);
    Route::resource('/team_score/team_score_first_test', 'TeamScoreFirstTestController', ['only' => ['index','show']]);
    Route::resource('/team_score/team_score_retest', 'TeamScoreRetestController', ['only' => ['index','show']]);
});

Route::group(['prefix' => 'teacher','namespace' => 'Teacher', 'middleware' => 'checkAuth:2'], function () {
    Route::resource('teacher_display', 'TeacherDisplayController', ['only' => ['index','show']]);
    Route::resource('teacher_retest', 'TeacherRetestController', ['only' => ['index','edit','update']]);
});

Route::group(['prefix' => 'judge','namespace' => 'Judge', 'middleware' => 'checkAuth:3'], function () {
    Route::resource('judge_first_test', 'JudgeFirstTestController', ['only' => ['index','edit','update']]);
});
