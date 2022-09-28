<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require_once 'vendor/autoload.php';
require_once 'bootstrap/app.php';

use InfinityBrackets\Core\Application;
/*
|--------------------------------------------------------------------------
| Initialize The Application
|--------------------------------------------------------------------------
*/

$app = new Application($config);
/*
|--------------------------------------------------------------------------
| GUEST View Routes
|--------------------------------------------------------------------------
*/
$app->router->Get('/', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'Index']);
$app->router->Get('/about', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'About']);
$app->router->Get('/onlineservices', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'OnlineServices']);
$app->router->Get('/physicalservices', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'PhysicalServices']);
$app->router->Get('/personnel', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'Personnel']);
$app->router->Get('/campus/{code}', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'Campus']);
$app->router->Get('/downloads', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'Download']);

/*
|--------------------------------------------------------------------------
| AUTH View Routes
|--------------------------------------------------------------------------
*/
$app->router->Get('/confirm', [\IntegratedLibrarySystem\Core\Controllers\AuthController::class, 'Auth']);
$app->router->Get('/deauth', [\IntegratedLibrarySystem\Core\Controllers\AuthController::class, 'DeAuth']);
$app->router->Get('/profile', [\IntegratedLibrarySystem\App\Controllers\ProfileController::class, 'Index']);
$app->router->Get('/createprofile', [\IntegratedLibrarySystem\App\Controllers\ProfileController::class, 'Create']);

/*
|--------------------------------------------------------------------------
| AJAX Routes
|--------------------------------------------------------------------------
*/
$app->router->Post('/verify', [\IntegratedLibrarySystem\Core\Controllers\AuthController::class, 'Verification']);
$app->router->Post('/getcourses', [\IntegratedLibrarySystem\App\Controllers\ProfileController::class, 'GetCourses']);
$app->router->Post('/createprofile', [\IntegratedLibrarySystem\App\Controllers\ProfileController::class, 'Create']);

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/
$app->Run();