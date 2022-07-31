<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Middleware\IsApproved;

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

 

Route::group( [ 'middleware' =>'auth'], function()
{

    Route::prefix('admin')->group(function () {


        Route::resource('blogs', BlogsController::class);
        
  
         Route::prefix('products')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin.products.index');
            Route::get('/create', [App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin.products.create');
            Route::post('/store', [App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin.products.store');
            Route::get('/edit', [App\Http\Controllers\ProductController::class,'edit'])->name('admin.edit-product');
         });



        
         Route::get('/dashboard', function () {
            return view('admin/dashboard');
         })->name('admin.dashboard')->middleware('approve');
      
         Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');

         Route::get('/approve-user', [App\Http\Controllers\UserApprovedController::class, 'index'])->name('admin.approve-user');
         Route::get('/user-to-approve', [App\Http\Controllers\UserApprovedController::class, 'approve'])->name('admin.user-to-approve');
     
       


        Route::get('/orders', function () {
            return view('admin/orders');
        })->name('admin.orders');
    });


 
});


Route::get('/approval', function(){
    return view('wait-for-approval');
})->name('approval');

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])
    ->name('products.index');


Route::get('/mycart', [\App\Http\Controllers\CartController::class, 'index'])
    ->name('cart.index');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])
    ->name('cart.store');


Route::get('/layout', function(){
    return view('layout');
});

Route::get('/logo', function(){
    return view('logo');
})->name('logo')->middleware('approved');

Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
