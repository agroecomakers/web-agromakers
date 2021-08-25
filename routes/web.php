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

//Set language
Route::get('/set_language/{lang}', 'Controller@set_language')->name('set_language');
//contact
Route::post('/contact', 'Controller@contact')->name('contact');


Route::view('/', 'web.index')->name('index');

//1 . ruta, 2. donde esta vista, 3. nombre de la ruta
Route::view('/certification', 'web.certification.certification')->name('certification');
Route::view('/aboutus/cooperative', 'web.aboutus.cooperative')->name('digital-cooperative');
Route::view('/aboutus/productors', 'web.aboutus.productors')->name('productors');
Route::view('/aboutus/institucional', 'web.aboutus.institucional')->name('institucional');
Route::view('/aboutus/associations', 'web.aboutus.associations')->name('associations');
Route::view('/aboutus/companies', 'web.aboutus.companies')->name('companies');
Route::view('/aboutus/tourism', 'web.aboutus.tourism')->name('tourism');
Route::view('/aboutus/consumer', 'web.aboutus.consumer')->name('consumer');

Route::view('/covid', 'web.covid')->name('covid');
Route::view('/map', 'web.map')->name('map');

Route::view('/resources/open-source', 'web.resources.open-source')->name('open-source');
Route::view('/resources/mi-campo-app', 'web.resources.mi-campo-app')->name('mi-campo-app');
Route::view('/resources/other-apps', 'web.resources.other-apps')->name('other-apps');
Route::view('/resources/learning', 'web.resources.learning')->name('learning');
Route::view('/resources/e-commerce', 'web.resources.e-commerce')->name('e-commerce');

Route::view('/events', 'web.events')->name('events');

