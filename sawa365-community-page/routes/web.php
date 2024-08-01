<?php

use App\Http\Controllers\BusinessDirectoryController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\FreelanceDirectoryController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ResourcesPageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\GroupController as ControllersGroupController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/json/countries', [CountryController::class, 'index'])->name('json.countries');
Route::get('/json/countries/states', [CountryController::class, 'index_states'])->name('json.countries.states');
Route::get('/json/nationalities', [NationalityController::class, 'index'])->name('json.nationalities');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // my-profile
    Route::get('/my-profile', [MyProfileController::class, 'index'])->name('my-profile.index');

    // business directory
    Route::get('/business', [BusinessDirectoryController::class, 'index'])->name('business.index');

    // freelance directory
    Route::get('/freelance', [FreelanceDirectoryController::class, 'index'])->name('freelance.index');
    Route::get('/freelance/show', [FreelanceDirectoryController::class, 'show'])->name('freelance.show');

    // forum 
    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/forum/show', [ForumController::class, 'show'])->name('forum.show');

    // resource
    Route::get('/resources', [ResourcesPageController::class, 'index'])->name('resources.index');
    Route::get('/resources/show', [ResourcesPageController::class, 'show'])->name('resources.show');

    // newsletter
    Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');

    //group
    Route::get('/groups', [ControllersGroupController::class, 'index'])->name('groups.index');
    Route::get('/groups/my-group/{name}', [ControllersGroupController::class, 'index_my_group'])->name('groups.my-group.index');

    // community
    Route::get('/community', [CommunityController::class, 'index'])->name('community.index');

    Route::get('/api1/groups', [GroupController::class, 'index']);
});

require __DIR__.'/auth.php';
