<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bot', function() {
    if (isset($_GET['hub_mode']) && $_GET['hub_mode'] == 'subscribe' && isset($_GET['hub_verify_token']) && $_GET['hub_verify_token'] == getenv('VERIFY_TOKEN')) {
        return isset($_GET['hub_challenge']) ? $_GET['hub_challenge'] : 'Error';
    }

    return "Bot";
});
