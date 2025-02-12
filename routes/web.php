<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmailNotificationController;
Route::get('/', function () {
    return view('home');
});

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/who-we-are', [PageController::class, 'whoweare'])->name('Who-We-Are');
Route::get('/what-we-do', [PageController::class, 'aboutus'])->name('What-We-Do');
Route::get('/what-s-new', [PageController::class, 'news'])->name('Whats-New');
Route::get('/join-us',    [PageController::class, 'careers'])->name('Careers');
Route::get('/contact-us', [PageController::class, 'contacts'])->name('ContactUs');
Route::get('/view/content/{contentType}/{id}',[PageController::class,'content'])->name('Content');
Route::get('/view/{contentType}/{id}',[PageController::class,'article'])->name('Article');
Route::get('/view/contents/{contentType}',[PageController::class,'contents'])->name('Content');
Route::get('/executives', [PageController::class,'leaders'])->name('Leaders');
Route::get('/search/jobs',[PageController::class,'searchJobs']);
Route::get('/view/job/description/{id}',[PageController::class,'job']);
Route::get('/debug/view/{view}',[PageController::class,'debugView']);

Route::post('/submit-inquiry-form', [EmailNotificationController::class, 'submitInquiryForm'])->name('form.inquiry.submit');
Route::post('/submit-job-form',     [EmailNotificationController::class,'submitJobForm'])     ->name('form.job.submit');

