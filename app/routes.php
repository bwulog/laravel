<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/', function() {
   
//    $user = User::all();

//    $user = new User();
//    $user->username = 'NewUser';
//    $user->password = Hash::make('password');
//    $user->save();

    
//    User::create([
//        'username' => 'AnotherUser1',
//        'password' => Hash::make('12345')
//    ]);
 
//    $user = User::find(4);
//    $user->username = 'UpdatedName';
//    $user->save();
 
//    $user = User::find(6);
//    $user->delete();
    
    return User::orderBy('username', 'asc')->take(2)->get();
    
});