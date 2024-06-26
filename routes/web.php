<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactFrontController;
use App\Http\Controllers\ProductFrontController;
use App\Http\Controllers\ProductDetailsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', [HomePageController::class, 'index'])->name('main');
        Route::get('/contact', [ContactFrontController::class, 'index'])->name('contact');
        Route::post('/contact_us', [ContactFrontController::class, 'contactUsForm'])->name('contacts_us');


        Route::get('/products', [ProductFrontController::class, 'index'])->name('product');



        Route::get('/product-details/{Product}', [ProductDetailsController::class, 'index'])->name('product-details');
    }
);


Route::prefix('dashboard')
    ->middleware((['auth', 'verified']))
    ->as('dashboard.')
    ->group(function () {


        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::resources([
            'products' => ProductController::class,
            'contacts' => ContactController::class,
        ]);
    });



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
