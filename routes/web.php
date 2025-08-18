<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextToSpeechController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
//endpoint que é o /text ele bate no metodo convert do TextToSpeechController
Route::post('/text',[TextToSpeechController::class,'convert'])->name('text.to.speech');