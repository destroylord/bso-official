<?php 


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController, PostController, BannerController, StructureController, VimiController};

// Route admin panel
Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('banners', BannerController::class );
    Route::resource('vimis', VimiController::class);
    Route::resource('/structures', StructureController::class);
});


// Route::get('/dashboard', function () {
//     return view('admin.blank.index');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/addPost', function () {
//     return view('admin.blogs.create');
// })->middleware(['auth'])->name('addPost');

// Route::get('/visi&misi', function () {
//     return view('admin.vimi.index');
// })->middleware(['auth'])->name('visimisi');

// Route::get('/banner', function () {
//     return view('admin.banners.index');
// })->middleware(['auth'])->name('banner');

// Route::get('/struktur', function () {
//     return view('admin.so.index');
// })->middleware(['auth'])->name('struktur');

// Route::get('/profile', function () {
//     return view('admin.profile.index');
// })->middleware(['auth'])->name('profile');