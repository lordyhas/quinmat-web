<?php
require __DIR__ . '/app_constant.php';

//use AppUtils\AppConstant;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlineMessageController;
use App\Http\Controllers\OnlineNewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnderMaintenanceController;
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

if (config('app.is_under_maintenance') === false):

    if (config('app.debug')):
        require __DIR__ . '/test_routes.php';
    endif;

    Route::get('/', function () {
        return Redirect::route("home.index", ["lang" => "fr"]);
    });

    Route::prefix('{lang?}')
        ->where(['lang' => '[a-zA-Z]{2}'])
        ->middleware('setlocale')
        ->group(function () {

            Route::prefix('/home')->group(function () {
                Route::controller(HomeController::class)->group(function () {
                    Route::get('/', 'index')->name('home.index');
                    Route::get('/preview/{test}', 'preview')
                        ->where(['test' => '[a-z0-9\-]+'])
                        ->name('home.preview');
                });

                Route::prefix('/newsletter')
                    ->controller(OnlineNewsletterController::class)->group(function () {
                        Route::post('/', 'store')->name('newsletter');
                        Route::get('/unsubscribe', 'delete')->name('newsletter.delete');
                    });

                Route::prefix('/contact/message')
                    ->controller(OnlineMessageController::class)->group(function () {
                        Route::post('/', 'create')->name('contact_message');
                        Route::post('/delete', 'delete')->name('contact_message.delete');
                    });
            });


            //Route::get('/welcome', function () {return view('welcome');})->name('welcome');

            Route::get('/admin', function () {
                return view('admin');
            })->name('admin');

            Route::get('/error/{code}', function (string $code) {
                abort($code);
            })->name('error');

            Route::get('/dashboard', function () {
                //if(Auth::user()->is_authorized)
                return view('dashboard');
            })->middleware(['auth', 'verified'])->name('dashboard');

            Route::middleware('auth')
                ->controller(ProfileController::class)
                ->group(function () {
                    Route::get('/profile', 'edit')->name('profile.edit');
                    Route::patch('/profile', 'update')->name('profile.update');
                    Route::delete('/profile', 'destroy')->name('profile.destroy');
            });

            require __DIR__ . '/auth.php';
            require __DIR__ . '/blog_routes.php';

        });



else:
    Route::get('/', [UnderMaintenanceController::class, 'index']);

endif;




