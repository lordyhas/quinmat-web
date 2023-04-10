<?php
require __DIR__ . '/app_constant.php';
//use AppUtils\AppConstant;

//use AppUtils\WebsiteState;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnderMaintenanceController;
use Illuminate\Http\Request;
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
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
        Route::get('/x', [HomeController::class, 'prod'])->name('home.prd');
        Route::get('/n', [HomeController::class, 'nws'])->name('home.nws');
    });


    Route::get('/compo', function () {
        return view('components');
    });

    Route::get('/hotfix', [UnderMaintenanceController::class, 'index']);

    require __DIR__ . '/blog_route.php';

else:
    Route::get('/', [UnderMaintenanceController::class, 'index']);

endif;

