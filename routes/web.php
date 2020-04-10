<?php

use Illuminate\Support\Facades\Route;
use App\Intro;
use App\Portfolio;
use App\Testimonial;
use App\Team;
use App\Service;

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
    $intro = Intro::all();
    $portfolio = Portfolio::all();
    $testimonials = Testimonial::all();
    $teams = Team::all();
    $services = Service::all();
    return view('welcome', compact("intro", "portfolio", "testimonials","teams", "services")) ;
});
// Intro
Route::get('/layouts/backoffice', "IntroController@index") -> name("Backoffice");
//
Route::get('/backoffice/{id}/delete', "IntroController@delete");
// 
Route::get('/backoffice/{id}/deletePortfolio', "PortfolioController@deletePortfolio");
Route::get('/backoffice/{id}/editportfolio', "PortfolioController@editPortfolio");
Route::post('/backoffice/{id}/updateportfolio', "PortfolioController@updatePortfolio");
// 
Route::get('/backoffice/{id}/deleteService', "ServiceController@deleteService");
Route::get('/backoffice/{id}/edit', "ServiceController@editService");
Route::post('/backoffice/{id}/updateservice', "ServiceController@updateService");
// Route::get('/backoffice/createservice', "ServiceController@createService");


// 
Route::get('/backoffice/{id}/deleteTeam', "TeamController@deleteTeam");
Route::get('/backoffice/{id}/editteam', "TeamController@editTeam");
Route::post('/backoffice/{id}/updateteam', "TeamController@updateTeam");

// 
Route::get('/backoffice/{id}/deleteTestimonial', "TestimonialController@deleteTestimonial");
Route::get('/backoffice/{id}/edittestimonial', "TestimonialController@editTestimonial");
Route::post('/backoffice/{id}/updatetestimonial', "TestimonialController@updateTestimonial");

  Route::get('/backoffice/create', "IntroController@create");

