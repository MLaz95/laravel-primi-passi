<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $text = 'Here is a cat';
    $imgPath = 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/1200px-Cat_August_2010-4.jpg';
    
    return view('home', compact('text', 'imgPath'));

})->name('main');

Route::get('/second', function () {
    
    $text = 'Here is a different cat';
    $imgPath = 'https://www.animalfriends.co.uk/siteassets/media/images/article-images/cat-articles/51_afi_article1_the-secret-language-of-cats.png';
    
    return view('second', compact('text', 'imgPath'));

})->name('second');
