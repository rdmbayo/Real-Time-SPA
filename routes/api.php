<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
route::apiResource('/question',"QuestionController");

route::apiResource('/category','CategoryController');
route::apiResource('/question/{question}/reply','ReplyController');
route::post('/like/{reply}','LikeController@likeIt');
route::delete('/like/{reply}','LikeController@unLikeIt');

Route::group([

    //'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');

});



/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/
