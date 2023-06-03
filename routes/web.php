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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team.index');
});
Route::get('/team1', function () {
    return view('team.index1');
});

/* Team sub pages */
Route::get('/team/one', function () {
    return view('team.1');
});
Route::get('/team/two', function () {
    return view('team.2');
});
Route::get('/team/three', function () {
    return view('team.3');
});
Route::get('/team/four', function () {
    return view('team.4');
});
Route::get('/team/five', function () {
    return view('team.5');
});
Route::get('/team/teamsix', function () {
    return view('team.6');
});
Route::get('/team/seven', function () {
    return view('team.7');
});
Route::get('/team/eight', function () {
    return view('team.8');
});
Route::get('/team/nine', function () {
    return view('team.9');
});
/* Team sub pages  */
Route::get('/legalservices', function () {
    return view('legalservices.index');
});
/* legal services sub pages */
Route::get('/legalservices/bankingandfinance', function () {
    return view('legalservices.bankingandfinance');
});

Route::get('/legalservices/commercial', function () {
    return view('legalservices.commercial');
});

Route::get('/legalservices/corporate', function () {
    return view('legalservices.corporate');
});

Route::get('/legalservices/dataProtection_and_cyberLaws', function () {
    return view('legalservices.dataProtection_and_cyberLaws');
});

Route::get('/legalservices/disputeResolution_and_adr', function () {
    return view('legalservices.disputeResolution_and_adr');
});

Route::get('/legalservices/employmentLaw', function () {
    return view('legalservices.employmentLaw');
});

Route::get('/legalservices/fraud_and_financialCrime', function () {
    return view('legalservices.fraud_and_financialCrime');
});

Route::get('/legalservices/insolvency_restructuring', function () {
    return view('legalservices.insolvency_restructuring');
});

Route::get('/legalservices/intellectual_property', function () {
    return view('legalservices.intellectual_property');
});

Route::get('/legalservices/estatePlanning', function () {
    return view('legalservices.estatePlanning');
});

Route::get('/legalservices/family_law', function () {
    return view('legalservices.family_law');
});

Route::get('/legalservices/taxDisputes_and_investigations', function () {
    return view('legalservices.taxDisputes_and_investigations');
});

Route::get('/legalservices/litigation', function () {
    return view('legalservices.litigation');
});
/* legal services sub pages */

Route::get('/resources', function () {
    return view('resources.index');
});

/* resources sub pages */
Route::get('/resources/blogs', function () {
    return view('resources.blogs');
});
Route::get('/resources/news', function () {
    return view('resources.news');
});
Route::get('/resources/videos', function () {
    return view('resources.videos');
});
Route::get('/resources/nodata', function () {
    return view('resources.nodata');
});
/* resources sub pages */
Route::get('/contact', function () {
    return view('contact');
});