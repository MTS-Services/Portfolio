<?php

use App\Http\Controllers\Backend\Admin\ProfileController;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Admin\ProfilePasswordController;
use App\Http\Controllers\Backend\PortfolioCategoryController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SkillsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [FrontendController::class, 'index'])->name('frontend');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('skills', SkillsController::class);
    Route::resource('services', ServiceController::class);


    //User Profile Routing
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('admin/profile/{edit}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('admin/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    //Portfolio Routing
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('port_categories', PortfolioCategoryController::class);
    Route::resource('education', EducationController::class);
    Route::get('site-settings', [SiteSettingController::class, 'index'])->name('site.settings');
    Route::put('site-settings/{id}', [SiteSettingController::class, 'update'])->name('site.settings.update');

    // Show the password change form
    Route::get('profile/password/{id}', [ProfilePasswordController::class, 'edit'])->name('profile.password.edit');

    // Handle the password update form submission
    Route::post('profile/password/{id}', [ProfilePasswordController::class, 'update'])->name('profile.password.update');
});
