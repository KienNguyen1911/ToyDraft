<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
    return view('404page');
});



// Route::get('/addproduct', function () {
//     return view('addProduct');
// });
// Route::get('/master', 'PageController@master')->name('master');
Route::get('/index', [PageController::class, 'getIndex'])->name('index');
Route::get('/admin', [PageController::class, 'getAdmin'])->name('admin');
Route::get('/dashboard', [PageController::class, 'getDashboard'])->name('dashboard');


// CRUD product
Route::get('/addproduct', [ProductController::class, 'addProduct']) -> name('addProduct');
Route::post('/addproduct', [ProductController::class, 'saveProduct']);
Route::get('/showproduct', [ProductController::class, 'showProduct']) -> name('showProduct');
Route::get('/editproduct/{id}', [ProductController::class, 'editProduct']) -> name('editProduct');
Route::post('/editproduct/{id}', [ProductController::class, 'updateProduct']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteProduct']) -> name('deleteProduct');

// CRUD Category
Route::get('/addcategory', [CategoryController::class, 'addCategory'])-> name('addCategory');
Route::post('/addcategory', [CategoryController::class, 'saveCategory'])-> name('saveCategory');
Route::get('/showcategory', [CategoryController::class, 'showCategory'])-> name('showCategory');
Route::get('/editcategory/{id}', [CategoryController::class, 'editCategory'])-> name('editCategory');
Route::post('/editcategory/{id}', [CategoryController::class, 'updateCategory'])-> name('updateCategory');
Route::get('/deletecategory/{id}', [CategoryController::class, 'deleteCategory'])-> name('deleteCategory');

// CRUD user
Route::get('/adduser', [UserController::class, 'addUser'])-> name('addUser');
Route::post('/adduser', [UserController::class, 'saveUser'])-> name('saveUser');
Route::get('/showuser', [UserController::class, 'showUser'])-> name('showUser');
Route::get('/edituser/{id}', [UserController::class, 'editUser'])-> name('editUser');
Route::post('/edituser/{id}', [UserController::class, 'updateUser'])-> name('updateUser');
Route::get('/deleteuser/{id}', [UserController::class, 'deleteUser'])-> name('deleteUser');

Route::get('/login', [UserController::class, 'getLogin'])-> name('login');
Route::post('/login', [UserController::class, 'postLogin'])-> name('postLogin');
Route::get('/logout', [UserController::class, 'logout'])-> name('logout');
Route::get('/register', [UserController::class, 'register'])-> name('register');
Route::post('/register', [UserController::class, 'postRegister'])-> name('postRegister');

// session
// Route::group(['middleware' => ['web']], function(){
    // Route
// });