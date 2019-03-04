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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {

    $user = array(
        'name'=>'Aleksandar',
        'age'=> 34,
        'job' => 'developer',
        'marital_status' => 'no thanks'
    );
    return view ('about',compact('user'));    
});

Route::get('/posts', 'PostsController@index');

  //  $posts = DB::table('posts')->get();

   // return view('posts.index', compact('posts'));

//});

Route::get('/posts/{id}', 'PostsController@show');

    //$post = DB :: table('posts')->find($id);

   // return view('posts/show', compact('post'));

//});

?>