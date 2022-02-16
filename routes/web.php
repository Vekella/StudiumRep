<?php

use App\Http\Controllers\MojController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;
use App\Http\Controllers;
use App\Http\Controllers\ArtikliController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\KomunikacijaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/pozdrav', function() {
    return 'Pozdrav svima';
});

Route::get('/moj', 'App\http\Controllers\MojController@index')->name('moj');

Route::post('broj/{id}', function ($id) {
    return 'Unijelo se '.$id;
});

Route::redirect('/ovdje', '/moj',301);

//returning view MojPogled
Route::view('mojamuka', 'MojPogled');

Route::get('objava/{id_objava}/komentari/{komentar}',function($id_objava,$komentar){
return 'Objava šifre:'.$id_objava.
'<br> Komentar:'.$komentar;
});

Route::get('/korisnik/{ime?}', function ($ime='Nema Korisnika') {
    return $ime;
});

use App\Http\Controllers\VjezbaController;
Route::get('vjezba/prikaz',[VjezbaController::class,'prikaz']);

Route::get('vjezba/povecaj/{broj?}',[VjezbaController::class,'povecaj']);

Route::get('vjezba/{b1}+{b2}',[VjezbaController::class,'zbroji']);


Route::resource('photos', PhotoController::class);
Route::view('slika', 'MojPogled');


Route::get('pozdravview', function () {
    return view('pozdrav',['ime'=>'Mate']);
});

Route::get('pozdravizkontrolera',[VjezbaController::class,'pozdrav']);

Route::get('kontakt',[VjezbaController::class,'kontakt']);

Route::get('/',[LayoutController::class,'index']);
Route::get('kontakt',[LayoutController::class,'kontakt']);
Route::get('fotke',[LayoutController::class,'fotke']);

//Rad sa KomunikacijaController ,


//Route::get('/','App\http\Controllers\KomunikacijaController@index')
Route::get('/moja-putanja',[KomunikacijaController::class,'index'] );
Route::get('/komunikacija/{id}',[KomunikacijaController::class,'index'] );
Route::get('/kontakt',[KomunikacijaController::class,'kontakt'] );
Route::post('/posaljiupit',[KomunikacijaController::class,'posaljiupit'] );

Route::match(['get','post'],'/kontakt',[KomunikacijaController::class,'kontakt2']);
Route::get('/',[KomunikacijaController::class,'index']);

Route::match(['get','post'],'/novaosoba',[KomunikacijaController::class,'NovaOsoba']);

Route::resource('artikli',ArtikliController::class,);


Auth::routes();

Route::get('/artikli', [App\Http\Controllers\ArtikliController::class, 'index'])->name('artikli');

// Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// 
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');
?>

