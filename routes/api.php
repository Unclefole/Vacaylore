<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UIController;
use App\Http\Controllers\api\HomeController;
use App\Http\Controllers\api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

/**-------------------AllowCors Middleware Starts--------------------------------------------------------------**/
Route::group(['middleware' => ['AllowCorsMiddleware']], function () {

    /**-------------------Sanctum Middleware Starts--------------------------------------------------------------**/

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::get('/hello', function () {
            dd(auth()->user()->tokens());
        });


    });

    /**-------------------multiple-records Api starts-----------------------------------------------------------------**/
    Route::post('/multiple-records', [ApiController::class, 'multiple_record']);
    /**-------------------multiple-records Api ends------------------------------------------------------**/

    /**-------------------Get All Packages Api starts-----------------------------------------------------------------**/
    Route::get('/package', [ApiController::class, 'all_packages'])->name('api_all_packages');
    /**-------------------Get All Packages Api ends------------------------------------------------------**/

    /**-------------------Get Package By Country Api starts------------------------------------------------------**/
    Route::get('/package-by-country/{id}', [ApiController::class, 'country_packages'])->name('api_country_packages');
    /**-------------------Get Package By Country Api ends-------------------------------------------------------------------**/

    /**-------------------Get Package By Guider Id Api------------------------------------------------------**/
    Route::get('/package-by-guider/{id}', [ApiController::class, 'guider_packages'])->name('api_guider_packages');
    /**-------------------Get Package By Guider Id ends-------------------------------------------------------------------**/

    /**-------------------Get Guider By Package Id Api------------------------------------------------------**/
    Route::get('/guider-by-package/{id}', [ApiController::class, 'package_guider'])->name('api_package_guider');
    /**-------------------Get Guider By Package Id ends-------------------------------------------------------------------**/

    /**-------------------Get Packages By Favored Sceneries Api start----------------------------------------------------------------**/
    Route::get('/package-by-favored-sceneries/{id}', [ApiController::class, 'favored_sceneries_packages'])->name('api_favored_sceneries_packages');
    /**-------------------Get Packages By Favored Sceneries Api end------------------------------------------------------------------**/

    /**-------------------Search Api starts----------------------------------------------------------------**/
    Route::post('/search/{id}', [ApiController::class, 'search']);
    Route::post('/search-filter', [ApiController::class, 'search_filter']);
    /**-------------------Search Api ends------------------------------------------------------------------**/

    /**-------------------Reviews Api Integration starts--------------------------------------------------**/
    Route::get('/reviews', [ApiController::class, 'reviews']);
    Route::post('/submit-review', [ApiController::class, 'submit_review']);
    /**-------------------Reviews Api Integration ends----------------------------------------------------**/

    /**-------------------Get Activities Api starts------------------------------------------------**/
    Route::get('/all-activities/', [ApiController::class, 'all_acitivities'])->name('all_acitivities');
    Route::get('/activities/{id}', [ApiController::class, 'acitivities'])->name('acitivities');
    /**-------------------Get Activities Api ends--------------------------------------------------**/

    /**-------------------Get Favored Sceneries Api starts------------------------------------------------**/
    Route::get('/favored-sceneries', [ApiController::class, 'favored_sceneries'])->name('favoredSceneries');
    /**-------------------Get Favored Sceneries Api ends--------------------------------------------------**/

    /**-------------------Order Api starts-------------------------------------------------------------------**/
    Route::post('/payment-intend', [ApiController::class, 'payment_intend']);
//    Route::post('/order-place', [ApiController::class, 'order_place']);
    /**-------------------Order Api ends-------------------------------------------------------------------**/

    /**-------------------stripe payment integration starts-----------------------------------------------**/
    Route::get('/get-stripe-pk-key', [ApiController::class, 'stripe_key']);
    Route::post('stripe-form/submit', [ApiController::class, 'submit'])->name('stripeSubmit');
    Route::post('stripe-form/after-submit', [ApiController::class, 'aftersubmit'])->name('afterSubmit');
    /**-------------------stripe payment integration ends-------------------------------------------------**/

    /**-------------------paypal payment integration starts-----------------------------------------------**/
    Route::post('paypal-payment', [ApiController::class, 'paypal_submit'])->name('paypal_submit');
    /**-------------------paypal payment integration ends-------------------------------------------------**/

    /**-------------------Journey Order Details Api starts----------------------------------------------------------**/
    Route::get('/journey-order-details/{id?}', [ApiController::class, 'journey_order_details'])->name('api_journey_order_details');
    /**-------------------Journey Order Details Api ends------------------------------------------------------------**/

    /**-------------------Auth logout Api starts----------------------------------------------------------**/
    Route::post('/logout', [HomeController::class, 'logout']);
    /**-------------------Auth logout Api ends------------------------------------------------------------**/

    /**-------------------Sanctum Middleware Ends----------------------------------------------------------------**/


    /**-------------------Auth Login Api starts------------------------------------------------------------------**/
    Route::post('/login', [HomeController::class, 'login']);
    Route::get('/login-required', [HomeController::class, 'loginRequired'])->name('loginRequired');
    /**-------------------Auth Login Api ends--------------------------------------------------------------------**/

    /**-------------------Auth Forgot-Password Api starts------------------------------------------------------------------**/
    Route::post('/forgot-password-email', [HomeController::class, 'forgot_password'])->name('api_forgot_password_email');
    Route::post('/reset-password', [HomeController::class, 'reset_password'])->name('api_reset_password');
    /**-------------------Auth Forgot-Password Api ends--------------------------------------------------------------------**/

    /**-------------------Register Api Starts-----------------------------------------------------------**/
    Route::post('/register', [HomeController::class, 'register']);
    /**-------------------Register Api Ends-------------------------------------------------------------**/
    
    /**-------------------Resend Api Starts-----------------------------------------------------------**/
    Route::get('/resend-email/{id}', [HomeController::class, 'resend_email']);
    /**-------------------Resend Api Ends-------------------------------------------------------------**/

    /**-------------------Get All Countries Api Starts-----------------------------------------------------------**/
    Route::get('/country', [ApiController::class, 'country']);
    /**-------------------Get All Countries Api Ends-------------------------------------------------------------**/

    /**-------------------Get Guider Booked Packages Api Starts-----------------------------------------------------------**/
    Route::post('/guider-booked-packages', [ApiController::class, 'guider_booked_packages'])->name('api_guider_booked_packages');
    /**-------------------Get Guider Booked Packages Api Ends-------------------------------------------------------------**/

    /**-------------------Meta Mask View With Login Api Starts-----------------------------------------------------------**/
    Route::get('/meta-mask/{package?}/{user?}', [ApiController::class, 'meta_mask'])->name('api_meta_mask');
    Route::get('/meta-login/{package?}/{user?}', [UIController::class, 'meta_login'])->name('meta_login');

//    Route::post('/blank-view/{package?}/{user?}', [ApiController::class, 'blank_view'])->name('api_blank_view');
    /**-------------------Meta Mask View With Login Api Ends-------------------------------------------------------------**/

    /**-------------------Meta Mask Eth Conversion Api Starts-------------------------------------------------------------**/
    Route::get('/eth-conversion/{package?}', [ApiController::class, 'eth_conversion'])->name('api_eth_conversion');
    /**-------------------Meta Mask Eth Conversion Api Ends-------------------------------------------------------------**/
    /**-------------------Meta Mask Eth Conversion Api Starts-------------------------------------------------------------**/
    Route::post('meta-mask/after-submit', [ApiController::class, 'metamask_aftersubmit'])->name('api_metamask_aftersubmit');
    /**-------------------Meta Mask Eth Conversion Api Ends-------------------------------------------------------------**/

    /**------------------- Delete Account Api Starts-----------------------------------------------------------**/
    Route::get('/delete-account/{id?}', [ApiController::class, 'user_account_delete'])->name('api_user_account_delete');
    /**------------------- Delete Account Api Ends-------------------------------------------------------------**/
});
/**-------------------AllowCors Middleware Ends--------------------------------------------------------------**/
