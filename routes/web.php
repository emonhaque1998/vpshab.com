<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\AddProductController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Admin\AllProductsController;
use App\Http\Controllers\CheckCountryStateController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Admin\SingleProductController;
use App\Http\Controllers\User\AccountSettingController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\MapInformationController;
use App\Http\Controllers\Admin\SpecificationsController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\BasicInformationController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Frontend\ResidentialRDPController;
use App\Http\Controllers\Frontend\ResidentialVPSController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\User\MyInvoiceController;
use App\Http\Controllers\User\MyServicesController;
use Illuminate\Support\Facades\Redirect;

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

Route::resource("/", WelcomeController::class)->middleware("visitorCount")->only(["index"]);

Route::resource('/contact', ContactController::class)->only(["index"]);

Route::resource('/about', AboutController::class)->only(["index"]);

// Need Implement to Residential VPS & Residential RDP Route and view
Route::resource("/residential-vps", ResidentialVPSController::class)->only(["index"]);

Route::resource("/residential-rdp", ResidentialRDPController::class)->only(["index"]);

Route::resource("/subscribe", SubscribeController::class)->only(["index", "store"]);

Route::resource('/admin/dashboard', AdminDashboardController::class)->only(["index"])->middleware(['auth:admin', 'verified'])->names([
    "index" => "admin.dashboard"
]);


Route::middleware(["auth"])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(["auth", "verified"])->group(function () {
    Route::resource("/dashboard", DashboardController::class)->only(["index"]);
    Route::resource("/account-setting", AccountSettingController::class)->only(["index", "store"]);
    Route::resource("/review", ReviewController::class)->only(["show"]);
    Route::get("/checkout/{ammount}/{productId}", [CheckoutController::class, "checkout"])->middleware("checkoutValidation");
    Route::resource("/my-services", MyServicesController::class)->only(["index"]);
    Route::resource("/my-invoice", MyInvoiceController::class)->only(["index", "show"]);
});

// Country state check
Route::resource("/check-country-state", CheckCountryStateController::class)->only(["show"]);


Route::middleware(["auth:admin"])->prefix("admin")->group(function () {
    Route::resource("/basic-information", BasicInformationController::class)->only(["index", "store"]);
    Route::resource("/banner-information", BannerController::class)->only(["index", "store"]);
    Route::resource("/map-information", MapInformationController::class)->only(["index", "store"]);
    Route::resource("/page-information", PageController::class)->only(['index', "store"]);
    Route::resource("/specification", SpecificationsController::class)->only(["index", "store", "destroy"]);
    Route::resource("/why-choose-me", WhyChooseController::class)->only(["index"]);
});

Route::middleware(["auth:admin"])->prefix("admin/products/")->group(function () {
    Route::resource("/all-products", AllProductsController::class)->only(["index", "show", "destroy", "edit"]);
    Route::resource("/edit/single-product", SingleProductController::class)->only(["show", "update"]);
    Route::resource("/add-product", AddProductController::class)->only(["index", "store"]);
    Route::resource("/category", ProductCategoryController::class)->only(["index", "store", "show", "update", "edit"]);
    Route::resource("/country", CountryController::class)->only(["index", "store"]);
});

Route::middleware(["auth:admin"])->prefix("admin/orders/")->group(function () {
    Route::resource("/all-orders", OrdersController::class)->only(["index"]);
});

Route::middleware(["auth:admin"])->prefix("admin")->group(function () {
    Route::resource("/all-users", UsersController::class)->only(["index"]);
});

Route::middleware(["auth:admin"])->prefix("admin")->group(function () {
    Route::resource("/profile", AdminProfileController::class)->only(["index", "store"])->names([
        "index" => "admin.profile"
    ]);
});

Route::middleware(["auth"])->group(function(){
    Route::post("/sassion", [StripeController::class, "sassion"]);
    Route::get("/success", [StripeController::class, "success"])->middleware(['checkPaySuccess'])->name("success");

    Route::get("/cancle", [StripeController::class, "cancle"])->name("cancle");
});



// Route::middleware(["auth", "checkPayMethod"])->group(function(){
//     // SSLCOMMERZ Start
//     Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
//     Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

//     Route::post('/pay/{amount}/{product}', [SslCommerzPaymentController::class, 'index']);
//     Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

//     Route::post('/success', [SslCommerzPaymentController::class, 'success']);
//     Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
//     Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

//     Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//     //SSLCOMMERZ END
// });

Route::get("/go-back", function(){
    return Redirect::back();
})->name("go.back");

require __DIR__ . '/adminauth.php';

require __DIR__ . '/auth.php';
