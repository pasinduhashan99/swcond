<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function()
{
    return View('pages.home');
});
Route::get('about', function()
{
    return View('pages.about');
});
Route::get('projects', function()
{
    return View('pages.projects');
});
Route::get('contact', function()
{
    return View('pages.contact');
});