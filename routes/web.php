<?php

use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/', 'App\Http\Controllers\frontend\HomeController@index');
Route::post('/tim-kiem', 'App\Http\Controllers\frontend\HomeController@search');


//Danh muc san pham trang chu
Route::get('/danh-muc-san-pham/{category_id}', 'App\Http\Controllers\backend\CategoryProduct@show_category_home');
Route::get('/chat-lieu-san-pham/{material_id}', 'App\Http\Controllers\backend\MaterialProduct@show_material_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'App\Http\Controllers\backend\ProductController@details_product');


//backend
Route::get('/admin', 'App\Http\Controllers\backend\DashboardController@index');
Route::get('/dashboard', 'App\Http\Controllers\backend\DashboardController@show_dashboard');
Route::get('/logout', 'App\Http\Controllers\backend\DashboardController@logout');
Route::post('/backend-dashboard-index', 'App\Http\Controllers\backend\DashboardController@dashboard');


//Category Product
Route::get('/add-category-product', 'App\Http\Controllers\backend\CategoryProduct@add_category_product');
Route::get('/all-category-product', 'App\Http\Controllers\backend\CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\backend\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\backend\CategoryProduct@delete_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\backend\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\backend\CategoryProduct@active_category_product');

Route::post('/save-category-product', 'App\Http\Controllers\backend\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\backend\CategoryProduct@update_category_product');


//Material Product
Route::get('/add-material-product', 'App\Http\Controllers\backend\MaterialProduct@add_material_product');
Route::get('/all-material-product', 'App\Http\Controllers\backend\MaterialProduct@all_material_product');
Route::get('/edit-material-product/{material_product_id}', 'App\Http\Controllers\backend\MaterialProduct@edit_material_product');
Route::get('/delete-material-product/{material_product_id}', 'App\Http\Controllers\backend\MaterialProduct@delete_material_product');

Route::get('/unactive-material-product/{material_product_id}', 'App\Http\Controllers\backend\MaterialProduct@unactive_material_product');
Route::get('/active-material-product/{material_product_id}', 'App\Http\Controllers\backend\MaterialProduct@active_material_product');

Route::post('/save-material-product', 'App\Http\Controllers\backend\MaterialProduct@save_material_product');
Route::post('/update-material-product/{material_product_id}', 'App\Http\Controllers\backend\MaterialProduct@update_material_product');


//Product
Route::get('/add-product', 'App\Http\Controllers\backend\ProductController@add_product');
Route::get('/all-product', 'App\Http\Controllers\backend\ProductController@all_product');
Route::get('/edit-product/{product_id}', 'App\Http\Controllers\backend\ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\backend\ProductController@delete_product');

Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\backend\ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'App\Http\Controllers\backend\ProductController@active_product');

Route::post('/save-product', 'App\Http\Controllers\backend\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\backend\ProductController@update_product');


//Coupon
Route::post('/check-coupon','App\Http\Controllers\frontend\CartController@check_coupon');

Route::get('/unset-coupon','App\Http\Controllers\backend\CouponController@unset_coupon');
Route::get('/insert-coupon','App\Http\Controllers\backend\CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}','App\Http\Controllers\backend\CouponController@delete_coupon');
Route::get('/list-coupon','App\Http\Controllers\backend\CouponController@list_coupon');
Route::post('/insert-coupon-code','App\Http\Controllers\backend\CouponController@insert_coupon_code');


//Cart
Route::post('/save-cart', 'App\Http\Controllers\frontend\CartController@save_cart');
Route::get('/show-cart', 'App\Http\Controllers\frontend\CartController@show_cart');
Route::get('/gio-hang', 'App\Http\Controllers\frontend\CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\frontend\CartController@delete_to_cart');
Route::get('/del-product/{session_id}', 'App\Http\Controllers\frontend\CartController@delete_product');
Route::post('/update-cart-quantity', 'App\Http\Controllers\frontend\CartController@update_cart_quantity');
Route::post('/update-cart', 'App\Http\Controllers\frontend\CartController@update_cart');
Route::post('/add-cart-ajax', 'App\Http\Controllers\frontend\CartController@add_cart_ajax');
Route::get('/del-all-product','App\Http\Controllers\frontend\CartController@delete_all_product');


//Checkout
Route::get('/login-checkout', 'App\Http\Controllers\frontend\CheckoutController@login_checkout');
Route::get('/logout-checkout', 'App\Http\Controllers\frontend\CheckoutController@logout_checkout');
Route::post('/add-customer', 'App\Http\Controllers\frontend\CheckoutController@add_customer');
Route::post('/order-place', 'App\Http\Controllers\frontend\CheckoutController@order_place');
Route::post('/login-customer', 'App\Http\Controllers\frontend\CheckoutController@login_customer');
Route::get('/checkout', 'App\Http\Controllers\frontend\CheckoutController@checkout');
Route::get('/payment', 'App\Http\Controllers\frontend\CheckoutController@payment');
Route::post('/save-checkout-customer', 'App\Http\Controllers\frontend\CheckoutController@save_checkout_customer');


//Order
Route::get('/manager-order', 'App\Http\Controllers\frontend\CheckoutController@manager_order');
Route::get('/view-order/{orderId}', 'App\Http\Controllers\frontend\CheckoutController@view_order');


//Send Mail
Route::get('/send-mail', 'App\Http\Controllers\backend\MailController@send_mail');


//Login facebook
Route::get('/login-facebook','App\Http\Controllers\backend\DashboardController@login_facebook');
Route::get('/admin/callback','App\Http\Controllers\backend\DashboardController@callback_facebook');


//Banner
Route::get('/manage-slider','App\Http\Controllers\backend\SliderController@manage_slider');
Route::get('/add-slider','App\Http\Controllers\backend\SliderController@add_slider');
Route::post('/insert-slider','App\Http\Controllers\backend\SliderController@insert_slider');
Route::get('/delete-slider/{slider_id}', 'App\Http\Controllers\backend\SliderController@delete_slider');
Route::get('/unactive-slider/{slider_id}', 'App\Http\Controllers\backend\SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}', 'App\Http\Controllers\backend\SliderController@active_slider');


//Delivery
Route::get('/delivery','App\Http\Controllers\backend\DeliveryController@delivery');
Route::post('/select-delivery','App\Http\Controllers\backend\DeliveryController@select_delivery');
Route::post('/insert-delivery','App\Http\Controllers\backend\DeliveryController@insert_delivery');
Route::post('/select-feeship','App\Http\Controllers\backend\DeliveryController@select_feeship');
Route::post('/update-delivery','App\Http\Controllers\backend\DeliveryController@update_delivery');