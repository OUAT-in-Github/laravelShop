<?php
use App\Customer;

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

Route::get('/', 'HomeController@welcome');

Route::get('/about', 'HomeController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/categories', 'CategoryController@index');

Route::get('/products', 'ProductController@index')->middleware('auth');
Route::post('/addproduct', 'ProductController@addProduct')->name('addproduct');
Route::get('/admin_dashboard', function(){ return view("admin.dashboard");})->middleware('admin');

Route::resource('/customers', 'Admin\CustomerController');




Route::get('/', function () {
    //
})->middleware('web');

Route::middleware(['web'])->group(function () {
    //
});