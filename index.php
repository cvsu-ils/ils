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
$app->router->Get('/profile', [\IntegratedLibrarySystem\Core\Controllers\ProfileController::class, 'Index']);
$app->router->Get('/createprofile', [\IntegratedLibrarySystem\Core\Controllers\ProfileController::class, 'Create']);
// Ebooks
$app->router->Get('/ebooks', [\IntegratedLibrarySystem\App\Controllers\EbookController::class, 'Index']);
$app->router->Get('/ebook/{id:\d+}', [\IntegratedLibrarySystem\App\Controllers\EbookController::class, 'Read']);
// Ejournals
$app->router->Get('/ejournals', [\IntegratedLibrarySystem\App\Controllers\EjournalController::class, 'Index']);
$app->router->Get('/ejournal/{id:\d+}', [\IntegratedLibrarySystem\App\Controllers\EjournalController::class, 'Read']);
// Auth and Guest
$app->router->Get('/confirm', [\IntegratedLibrarySystem\Core\Controllers\AuthController::class, 'Auth']);
$app->router->Get('/deauth', [\IntegratedLibrarySystem\Core\Controllers\AuthController::class, 'DeAuth']);
$app->router->Get('/auth', [\IntegratedLibrarySystem\Core\Controllers\GuestController::class, 'SignIn']);

/*
|--------------------------------------------------------------------------
| AJAX Routes
|--------------------------------------------------------------------------
*/
// Google callback
$app->router->Post('/verify', [\IntegratedLibrarySystem\Core\Controllers\AuthController::class, 'Verification']);

$app->router->Post('/getcourses', [\IntegratedLibrarySystem\Core\Controllers\ProfileController::class, 'GetCourses']);
$app->router->Post('/createprofile', [\IntegratedLibrarySystem\Core\Controllers\ProfileController::class, 'Create']);

$app->router->Post('/guest/getcourses', [\IntegratedLibrarySystem\Core\Controllers\GuestController::class, 'GetCourses']);
$app->router->Post('/guest/auth', [\IntegratedLibrarySystem\Core\Controllers\GuestController::class, 'Auth']);

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/
$app->Run();