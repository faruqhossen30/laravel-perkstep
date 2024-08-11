<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Ajax\GalleryAjaxController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogComtroller;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PortfoliopageController;
use App\Http\Controllers\PricepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewpageController;
use App\Http\Controllers\ReviewSubmitController;
use App\Http\Controllers\ServicepageController;
use App\Http\Controllers\TearmsController;
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






Route::get('/test', function () {
    return view('test');
});

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::get('blog',[BlogpageController::class,'blogPage'])->name('blog.page');
Route::get('blog/{slug}',[BlogpageController::class,'singleBlogPage'])->name('single.blog.page');
Route::get('contact',[ContactController::class,'contactPage'])->name('contact.page');
Route::get('servicepage',[ServicepageController::class,'servicePage'])->name('service.page');
Route::get('service/{slug}',[ServicepageController::class,'singleServicePage'])->name('single.service.page');
Route::get('portfoliopage',[PortfoliopageController::class,'portfolioPage'])->name('portfolio.page');
Route::get('portfolio/{slug}',[PortfoliopageController::class,'singlePortfolio'])->name('portfolio.single');
Route::get('aboutus',[AboutpageController::class,'aboutPage'])->name('about.page');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
