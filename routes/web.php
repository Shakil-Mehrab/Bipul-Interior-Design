<?php

use Illuminate\Support\Facades\Route;
// admin
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SlideController;



// User
use App\Http\Controllers\Layouts\ProductsController;
use App\Http\Controllers\HomeController;


// public
use App\Http\Controllers\Layout\AboutController;
use App\Http\Controllers\Layout\PublicController;


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


Route::get('/',[PublicController::class,'welcome']);
Route::group(['middleware'=>['auth:sanctum', 'verified']],function () {
    Route::get('/dashboard', [HomeController::class,'home'])->name('dashboard');
});
// Category
Route::get('/category/design/grid/view/{id}',[PublicController::class,'gridIndex']);
Route::get('/design/detail/{id}',[PublicController::class,'detail']);
// Route::get('/carousel',[PublicController::class,'carousel']);
// Route::get('/image',[PublicController::class,'image']);
// Route::get('/galery',[PublicController::class,'galery']);
Route::get('/right/sidebar',[PublicController::class,'rightSidebar']);











Route::get('/search',[ShopController::class,'addCategory'])->name('search');



//pop,renent,cat,abt,contact
Route::get('/about/us',[AboutController::class,'about']);
Route::get('/contact/us',[AboutController::class,'contact']);
Route::get('/terms/condition',[AboutController::class,'condition']);
Route::get('/moneyback',[AboutController::class,'moneyback']);
Route::get('/how/to/order',[AboutController::class,'howToOrder']);

//single product
Route::get('/user/product/show/{id}',[PublicController::class,'show']);
Route::get('/user/product/quick/show/{id}',[PublicController::class,'quickShow']);
Route::get('/user/same/products/show/{id}',[PublicController::class,'sameProduct']);
Route::get('/user/related/product/{id}',[PublicController::class,'relatedProduct']);






Route::group(['middleware' =>['auth']],function(){
    //Client Route
    Route::match(['get','post'],'/admin/add-client',[ClientController::class,'addCategory']);
    Route::match(['get','post'],'/admin/view-client',[ClientController::class,'viewCategories']);
    Route::match(['get','post'],'/admin/edit-client/{id}',[ClientController::class,'editCategory']);
    Route::match(['get','post'],'/admin/delete-client/{id}',[ClientController::class,'deleteCategory']);
    Route::post('/admin/update-client-status',[ClientController::class,'updateStatus']);
    // Partner Route
    Route::match(['get','post'],'/admin/add-partner-images',[ClientController::class,'addImages']);
    // Route::match(['get','post'],'/admin/view-partner',[ClientController::class,'viewPartner']);
    // Route::match(['get','post'],'/admin/edit-partner/{id}',[ClientController::class,'editPartner']);
    Route::get('/admin/delete-alt-partner-image/{id}',[ClientController::class,'deleteAltImage']);
    //Slide Route
    Route::match(['get','post'],'/admin/add-slide',[SlideController::class,'addCategory']);
    Route::match(['get','post'],'/admin/view-slide',[SlideController::class,'viewCategories']);
    Route::match(['get','post'],'/admin/edit-slide/{id}',[SlideController::class,'editCategory']);
    Route::match(['get','post'],'/admin/delete-slide/{id}',[SlideController::class,'deleteCategory']);
    Route::post('/admin/update-slide-status',[SlideController::class,'updateStatus']);
    //About Route
    Route::match(['get','post'],'/admin/add-about',[AdminAboutController::class,'addCategory']);
    Route::match(['get','post'],'/admin/view-about',[AdminAboutController::class,'viewCategories']);
    Route::match(['get','post'],'/admin/edit-about/{id}',[AdminAboutController::class,'editCategory']);
    Route::match(['get','post'],'/admin/delete-about/{id}',[AdminAboutController::class,'deleteCategory']);
    Route::post('/admin/update-about-status',[AdminAboutController::class,'updateStatus']);
    //Category Route
    Route::match(['get','post'],'/admin/add-category',[CategoryController::class,'addCategory']);
    Route::match(['get','post'],'/admin/view-categories',[CategoryController::class,'viewCategories']);
    Route::match(['get','post'],'/admin/edit-category/{id}',[CategoryController::class,'editCategory']);
    Route::match(['get','post'],'/admin/delete-category/{id}',[CategoryController::class,'deleteCategory']);
    Route::post('/admin/update-category-status',[CategoryController::class,'updateStatus']);
    Route::match(['get','post'],'/admin/view-product/bycategory/{id}',[CategoryController::class,'viewByCategory']);
    Route::match(['get','post'],'/admin/add-product/bycategory/{id}',[CategoryController::class,'addByCategory']);

    //Product Route
    Route::match(['get','post'],'/admin/add-product',[ProductsController::class,'addProduct']);
    Route::match(['get','post'],'/admin/view-products',[ProductsController::class,'viewProducts']);
    Route::match(['get','post'],'/admin/edit-product/{id}',[ProductsController::class,'editProduct']);
    Route::match(['get','post'],'/admin/delete-product/{id}',[ProductsController::class,'DeleteProduct']);
    Route::post('/admin/update-product-status',[ProductsController::class,'updateStatus']);
    Route::post('/admin/update-featured-product-status',[ProductsController::class,'updateFeatured']);
    //Products Attributes
    Route::match(['get','post'],'/admin/add-attributes/{id}',[ProductsController::class,'addAttributes']);
    Route::get('/admin/delete-attribute/{id}', [ProductsController::class,'deleteAttribute']);
    Route::match(['get','post'],'/admin/edit-attributes/{id}',[ProductsController::class,'editAttributes']);
    Route::match(['get','post'],'/admin/add-images/{id}',[ProductsController::class,'addImages']);
    Route::get('/admin/delete-alt-image/{id}',[ProductsController::class,'deleteAltImage']);
});
