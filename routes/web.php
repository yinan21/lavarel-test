<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
    Route::get('/', function() {
        return view('form');
    });
    // route for our ajax post request
    Route::post('ajax', function() {
        
        $n = Request::get('mynumber');
        if (!Session::has('arr')) {
            $number = range(1,100);
            Session::put('arr', $number );
        }
        $arr = Session::get('arr' );  
        if (($key = array_search($n, $arr)) !== false) {
            unset($arr[$key]);
        }
        Session::put('arr', $arr );
        $arr_all =  range(1,100);
        $arr_diff = array_diff($arr_all, $arr);
        $res = implode(',',$arr_diff);
        return response()->json([
            'num' => 'The missing numbers are: ' . $res
        ]);
    });