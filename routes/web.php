<?php
require __DIR__ . '/app_constant.php';
//use AppUtils\AppConstant;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnderMaintenanceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

class RouteName
{
    static string $home_index = "home.index";
    static string $blog_home = "blog.index";
    static string $blog_compose = "blog.index";

}


$is_not_under_maintenance = !((new WebsiteState())->is_under_maintenance() ?? false);

if ($is_not_under_maintenance):

    //Route::redirect("/", "/home");

    Route::get('/', function () {
        return Redirect::route("home.index", ["lang" => "fr"]);
    });




    Route::prefix('{lang}/home')->where(['lang' => '[a-zA-Z]{2}'])->group(function () {

        Route::controller(HomeController::class)->group(function (){
            Route::get('/','index')->name('home.index');
            Route::get('/x', 'prod')->name('home.prd');
            Route::get('/n', 'nws')->name('home.nws');
        });

        require __DIR__ . '/blog_route.php';
    });

    Route::get('/welcome', function () {

        return view('welcome');
    })->name('welcome');

    Route::get('/admin', function () {

        return view('admin');
    })->name('admin');

    Route::get('/error', function () {
        abort("403");
        //return view('welcome');
    })->name('error');

    Route::get('/dashboard', function () {
        //if(Auth::user()->is_authorized)
        return view('dashboard');

    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile',  'destroy')->name('profile.destroy');
    });

    require __DIR__.'/auth.php';


    Route::get('/compo', function () {
        return view('components');
    });

    Route::get('/hotfix', [UnderMaintenanceController::class, 'index']);

else:
    Route::get('/', [UnderMaintenanceController::class, 'index']);

endif;


