<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ServiceController; // Import the ServiceController

/*
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product', function () {
    return view('services.product');
})->name('product');


Route::get('/iot', function () {
    return view('services.iot');
})->name('iot');

Route::get('/mobileapp', function () {
    return view('services.mobileapp');
})->name('mobileapp');


Route::get('/placement', function () {
    return view('services.placement');
})->name('placement');

Route::get('/recruitment', function () {
    return view('services.recruitment');
})->name('recruitment');

Route::get('/usa', function () {
    return view('services.usa');
})->name('usa');

Route::get('/canada', function () {
    return view('services.canada');
})->name('canada');




Route::get('/di_bi', function () {
    return view('services.dibi');
})->name('di_bi');

Route::get('/dw_eng', function () {
    return view('services.datawarehouse');
})->name('dw_eng');

Route::get('/webapp', function () {
    return view('services.webapp');
})->name('webapp');

Route::get('/staffing', function () {
    return view('services.staffing');
})->name('staffing');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/resume_parser', function () {
    return view('resume_parser');
})->name('resume_parser');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

// Route::resource('contact', [ContactController::class, 'store'])->name('contact.submit');
// below main without recaptcha
// Route::resource('contact', ContactController::class);
// with recaptcha

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');


// end
// Route for listing all posts
// previous
// Route::get('/blog', [PostController::class, 'index'])->name('blog');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// // new
// Route::get('/posts/{slug}', [PostController::class, 'show'])->name('post.show');

// latest and useful
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

// without slu
// Route::get('/course', [CourseController::class, 'index'])->name('course');
// Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// with slugs
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');


Route::get('/batch', [BatchController::class, 'index'])->name('batch');
Route::get('/batchs/{batch}', [BatchController::class, 'show'])->name('batchs.show');

// Route for listing all countries
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

// Route for showing a specific country
Route::get('/countries/{country}', [CountryController::class, 'show'])->name('countries.show');



// Routes for services old ones
// Route::get('/service', [ServiceController::class, 'index'])->name('service');
// Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
