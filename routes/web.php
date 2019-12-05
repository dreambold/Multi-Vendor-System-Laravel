<?php
include_once 'web_builder.php';
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

Route::pattern('slug', '[a-z0-9- _]+');

# auction admin product
Route::group(['prefix' => 'admin',  'middleware' => 'admin',  'namespace'=>'Admin'], function(){
    Route::get('product/category', 'ProductCategoryController@index');
    Route::post('product/category/ajaxCategoryTree', 'ProductCategoryController@ajaxCategoryTree');
    Route::post('product/category/ajaxSaveCategory', 'ProductCategoryController@ajaxSaveCategory');
    Route::post('product/category/ajaxDeleteCategory', 'ProductCategoryController@ajaxDeleteCategory');
    Route::any('product/category/ajaxGetCategoryTopBrandList/{id}', 'ProductCategoryController@ajaxGetCategoryTopBrandList');
    Route::any('product/category/ajaxGetAllBrand', 'ProductCategoryController@ajaxGetAllBrand');


    Route::get('product/categoryAttr', 'ProductCategoryAttrController@index');
    Route::post('product/categoryAttr/ajaxCategoryList', 'ProductCategoryAttrController@ajaxCategoryList');
    Route::post('product/categoryAttr/ajaxCategoryAttrList', 'ProductCategoryAttrController@ajaxCategoryAttrList');
    Route::post('product/categoryAttr/ajaxCategoryAttrInfo', 'ProductCategoryAttrController@ajaxCategoryAttrInfo');
    Route::post('product/categoryAttr/ajaxSaveAttr', 'ProductCategoryAttrController@ajaxSaveAttr');
    Route::post('product/category/ajaxDeleteAttr', 'ProductCategoryAttrController@ajaxDeleteAttr');
    Route::post('product/categoryAttr/ajaxCategoryAttrValList', 'ProductCategoryAttrController@ajaxCategoryAttrValList');
    Route::post('product/categoryAttr/ajaxGetAttrVal', 'ProductCategoryAttrController@ajaxGetAttrVal');
    Route::post('product/categoryAttr/ajaxSaveAttrVal', 'ProductCategoryAttrController@ajaxSaveAttrVal');
    Route::post('product/category/ajaxDeleteAttrVal', 'ProductCategoryAttrController@ajaxDeleteAttrVal');
    Route::get('product', 'ProductController@index');
    Route::post('product/ajaxCategoryList', 'ProductController@ajaxCategoryList');
    Route::post('product/ajaxProductList', 'ProductController@ajaxProductList');
    Route::any('product/{id}/{categoryId}', 'ProductController@productInfo');
    Route::post('product/customize_variant_content', 'ProductController@customize_variant_content');
    Route::post('product/ajaxVariantTableList', 'ProductController@ajaxVariantTableList');
    Route::post('product/ajaxSaveProductInfo', 'ProductController@ajaxSaveProductInfo');
    Route::post('product/ajaxDeleteProduct', 'ProductController@ajaxDeleteProduct');

    Route::any('brand', 'BrandController@index');
    Route::get('brand/{id}', 'BrandController@getInfo');
    Route::post('brand/ajaxSaveBrand', 'BrandController@ajaxSaveBrand');
    Route::post('brand/ajaxDeleteBrand', 'BrandController@ajaxDeleteBrand');

    Route::any('banner', 'BannerController@index');
    Route::get('banner/{id}', 'BannerController@getInfo');
    Route::post('banner/ajaxSaveInfo', 'BannerController@ajaxSaveInfo');
    Route::post('banner/ajaxDeleteInfo', 'BannerController@ajaxDeleteInfo');
});



Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {

    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return view('admin/404');
    });
    Route::get('500', function () {
        return view('admin/500');
    });
    # Lock screen
    Route::get('{id}/lockscreen', 'UsersController@lockscreen')->name('lockscreen');
    Route::post('{id}/lockscreen', 'UsersController@postLockscreen')->name('lockscreen');
    # All basic routes defined here
    Route::get('login', 'AuthController@getSignin')->name('login');
    Route::get('signin', 'AuthController@getSignin')->name('signin');
    Route::post('signin', 'AuthController@postSignin')->name('postSignin');
    Route::post('signup', 'AuthController@postSignup')->name('admin.signup');
    Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');
    Route::get('login2', function () {
        return view('admin/login2');
    });


    # Register2
    Route::get('register2', function () {
        return view('admin/register2');
    });
    Route::post('register2', 'AuthController@postRegister2')->name('register2');

    # Forgot Password Confirmation
    Route::get('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm')->name('forgot-password-confirm');
    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm');

    # Logout
    Route::get('logout', 'AuthController@getLogout')->name('logout');

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', 'AuthController@getActivate')->name('activate');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    # GUI Crud Generator
    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');
    // Model checking
    Route::post('modelCheck', 'ModelcheckController@modelCheck');

    # Dashboard / Index
    Route::get('/', 'JoshController@showHome')->name('dashboard');
    Route::post('getOrderstatisticsLineData', 'JoshController@getOrderstatisticsLineData');
    Route::post('getProductOrderStatisticsTimeLineData', 'JoshController@getProductOrderStatisticsTimeLineData');
    # crop demo
    Route::post('crop_demo', 'JoshController@crop_demo')->name('crop_demo');
    //Log viewer routes
    Route::get('log_viewers', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log-viewers');
    Route::get('log_viewers/logs', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log_viewers.logs');
    Route::delete('log_viewers/logs/delete', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log_viewers.logs.delete');
    Route::get('log_viewers/logs/{date}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log_viewers.logs.show');
    Route::get('log_viewers/logs/{date}/download', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log_viewers.logs.download');
    Route::get('log_viewers/logs/{date}/{level}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log_viewers.logs.filter');
    Route::get('log_viewers/logs/{date}/{level}/search', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search')->name('log_viewers.logs.search');
    Route::get('log_viewers/logcheck', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck')->name('log-viewers.logcheck');
    //end Log viewer
    # Activity log
    Route::get('activity_log/data', 'JoshController@activityLogData')->name('activity_log.data');
});

Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {

    # User Management
    Route::group([ 'prefix' => 'users'], function () {
        Route::get('data', 'UsersController@data')->name('users.data');
        Route::get('{user}/delete', 'UsersController@destroy')->name('users.delete');
        Route::get('{user}/confirm-delete', 'UsersController@getModalDelete')->name('users.confirm-delete');
        Route::get('{user}/restore', 'UsersController@getRestore')->name('restore.user');
//        Route::post('{user}/passwordreset', 'UsersController@passwordreset')->name('passwordreset');
        Route::post('passwordreset', 'UsersController@passwordreset')->name('passwordreset');

    });
    Route::resource('users', 'UsersController');

    Route::get('deleted_users',['before' => 'Sentinel', 'uses' => 'UsersController@getDeletedUsers'])->name('deleted_users');

    # Group Management
    Route::group(['prefix' => 'groups'], function () {
        Route::get('{group}/delete', 'GroupsController@destroy')->name('groups.delete');
        Route::get('{group}/confirm-delete', 'GroupsController@getModalDelete')->name('groups.confirm-delete');
        Route::get('{group}/restore', 'GroupsController@getRestore')->name('groups.restore');
    });
    Route::resource('groups', 'GroupsController');

    /*routes for blog*/
    Route::group(['prefix' => 'blog'], function () {
        Route::get('{blog}/delete', 'BlogController@destroy')->name('blog.delete');
        Route::get('{blog}/confirm-delete', 'BlogController@getModalDelete')->name('blog.confirm-delete');
        Route::get('{blog}/restore', 'BlogController@restore')->name('blog.restore');
        Route::post('{blog}/storecomment', 'BlogController@storeComment')->name('storeComment');
    });
    Route::resource('blog', 'BlogController');

    /*routes for blog category*/
    Route::group(['prefix' => 'blogcategory'], function () {
        Route::get('{blogCategory}/delete', 'BlogCategoryController@destroy')->name('blogcategory.delete');
        Route::get('{blogCategory}/confirm-delete', 'BlogCategoryController@getModalDelete')->name('blogcategory.confirm-delete');
        Route::get('{blogCategory}/restore', 'BlogCategoryController@getRestore')->name('blogcategory.restore');
    });
    Route::resource('blogcategory', 'BlogCategoryController');
    /*routes for file*/
    Route::group(['prefix' => 'file'], function () {
        Route::post('create', 'FileController@store')->name('store');
        Route::post('createmulti', 'FileController@postFilesCreate')->name('postFilesCreate');
        Route::delete('delete', 'FileController@delete')->name('delete');
    });

    Route::get('crop_demo', function () {
        return redirect('admin/imagecropping');
    });


    /* laravel example routes */
    #Charts
    Route::get('laravel_chart', 'ChartsController@index')->name('laravel_chart');
    Route::get('database_chart', 'ChartsController@databaseCharts')->name('database_chart');

    # datatables
    Route::get('datatables', 'DataTablesController@index')->name('index');
    Route::get('datatables/data', 'DataTablesController@data')->name('datatables.data');

    # editable datatables
    Route::get('editable_datatables', 'EditableDataTablesController@index')->name('index');
    Route::get('editable_datatables/data', 'EditableDataTablesController@data')->name('editable_datatables.data');
    Route::post('editable_datatables/create', 'EditableDataTablesController@store')->name('store');
    Route::post('editable_datatables/{id}/update', 'EditableDataTablesController@update')->name('update');
    Route::get('editable_datatables/{id}/delete', 'EditableDataTablesController@destroy')->name('editable_datatables.delete');

//    # custom datatables
    Route::get('custom_datatables', 'CustomDataTablesController@index')->name('index');
    Route::get('custom_datatables/sliderData', 'CustomDataTablesController@sliderData')->name('custom_datatables.sliderData');
    Route::get('custom_datatables/radioData', 'CustomDataTablesController@radioData')->name('custom_datatables.radioData');
    Route::get('custom_datatables/selectData', 'CustomDataTablesController@selectData')->name('custom_datatables.selectData');
    Route::get('custom_datatables/buttonData', 'CustomDataTablesController@buttonData')->name('custom_datatables.buttonData');
    Route::get('custom_datatables/totalData', 'CustomDataTablesController@totalData')->name('custom_datatables.totalData');

    //tasks section
    Route::post('task/create', 'TaskController@store')->name('store');
    Route::get('task/data', 'TaskController@data')->name('data');
    Route::post('task/{task}/edit', 'TaskController@update')->name('update');
    Route::post('task/{task}/delete', 'TaskController@delete')->name('delete');
});


# auction front sell
Route::group(['prefix' => 'front',  'namespace'=>'Front'], function(){
    // main route
    Route::get("index", "HomeController@index");
    // category route
    Route::get("category/{id}/{brandId}", "CategoryController@showCategory");
    Route::get("all_categories/{id}", "CategoryController@showAllCategories");
    // brand route
    Route::get("brand/{id}", "BrandController@showBrand");

    // product route
    Route::get("product_list/{categoryId}", "ProductController@showProductList");
    Route::get("seller_product_list/{sellerId}", "ProductController@showSellerProductList");
    Route::get("product/{id}", "ProductController@showProduct");
    Route::get("find_products", "ProductController@findProducts");
    Route::post("save_search", "ProductController@saveSearch");

    Route::post("product/ajaxUpdateProductInfo", "ProductController@ajaxUpdateProductInfo");
    Route::post("product/ajaxDeleteProductInfo", "ProductController@ajaxDeleteProductInfo");
    Route::post("product/ajaxGetProductVariantList", "ProductController@ajaxGetProductVariantList");
    Route::post('product/customize_variant_content', 'ProductController@customize_variant_content');
    Route::post('product/ajaxVariantTableList', 'ProductController@ajaxVariantTableList');
    Route::post('product/ajax_order_review_list', 'ProductController@ajax_order_review_list');

    // sell route
    Route::get('sell', 'SellController@index');
    Route::post('sell/ajaxCategoryTree', 'SellController@ajaxCategoryTree');
    Route::post('sell/ajaxCategoryAttr', 'SellController@ajaxCategoryAttr');
    Route::post('sell/ajaxSaveSellDetail', 'SellController@ajaxSaveSellDetail');
    //cart route
    Route::post("saveCart", 'BasketController@insertCart');
});

# auction front basket
Route::group(['prefix' => 'front/basket', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::get('index', 'BasketController@index');
    Route::post('ajaxSaveBasketInfo', 'BasketController@ajaxSaveBasketInfo');
    Route::post('ajaxDeleteInfo', 'BasketController@ajaxDeleteInfo');
});

# auction front checkout
Route::group(['prefix' => 'front/checkout', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::get('index', 'CheckoutController@index');
    Route::post('createOrder', 'CheckoutController@createOrder');
    Route::post('createTransLog', 'CheckoutController@createTransLog');
});

#auction pay callback
Route::any('/pay/success/callback', "front\PayCallbackController@index");

Route::post('/send_email', "FrontEndController@send_email");
# auction front user_receive_address
Route::group(['prefix' => 'front/user_receive_address', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::post('ajaxList', 'UserReceiveAddressController@ajaxList');
    Route::post('ajaxInfo', 'UserReceiveAddressController@ajaxInfo');
    Route::post('ajaxSaveInfo', 'UserReceiveAddressController@ajaxSaveInfo');
    Route::post('ajaxDeleteInfo', 'UserReceiveAddressController@ajaxDeleteInfo');
    Route::post('ajaxSetActive', 'UserReceiveAddressController@ajaxSetActive');
    Route::post('ajaxGetActiveInfo', 'UserReceiveAddressController@ajaxGetActiveInfo');
});




#auction front my page
Route::group(['prefix' => 'front', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::get('my/account', 'MyController@index')->name('front-account');
    Route::get('my/messages', 'MyController@messages');
    Route::get('my/activity_index', 'MyController@activity_index');
    Route::get('my/activity_summary', 'MyController@activity_summary');
    Route::get('my/activity_recent_view', 'MyController@activity_recent_view');
    Route::get('my/activity_purchase_history', 'MyController@activity_purchase_history');
    Route::get('my/activity_watching', 'MyController@activity_watching');
    Route::get('my/activity_saved_searches', 'MyController@activity_saved_searches');
    Route::get('my/activity_saved_sellers', 'MyController@activity_saved_sellers');
    Route::get('my/activity_sell', 'MyController@activity_sell');
    Route::post('my/ajaxClearProductHistory', 'MyController@ajaxClearProductHistory');
    Route::post('my/ajaxSaveSeller', 'MyController@ajaxSaveSeller');
    Route::post('my/ajaxDeleteSaveHistory/{id}', 'MyController@ajaxDeleteSaveHistory');
});

#auction front my order
Route::group(['prefix' => 'front/my/order', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::post('order_unpaid_list', 'MyOrderController@order_unpaid_list');
    Route::post('order_paid_list', 'MyOrderController@order_paid_list');
    Route::post('discount_buy_proposal', 'MyOrderController@discount_buy_proposal');
    Route::post('ajax_buy_discount_proposal', 'MyOrderController@ajax_buy_discount_proposal');
});

#auction front my sell order
Route::group(['prefix' => 'front/my/sell_order', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::post('order_discount_list', 'MySellOrderController@order_discount_list');
    Route::post('discount_seller_proposal', 'MySellOrderController@discount_seller_proposal');
    Route::post('ajax_sell_discount_proposal', 'MySellOrderController@ajax_sell_discount_proposal');
    Route::post('order_list', 'MySellOrderController@order_list');
    Route::post('ajax_sell_update_order', 'MySellOrderController@ajax_sell_update_order');
});

#auction front my seller page
Route::group(['prefix' => 'front/my/seller', 'middleware' => 'user', 'namespace'=>'Front'], function(){
    Route::get('messages', 'MySellerController@messages');
    Route::get('activity', 'MySellerController@activity_index');
    Route::get('activity_summary', 'MySellerController@activity_summary');
    Route::get('activity_recent_view', 'MySellerController@activity_recent_view');
    Route::get('activity_buying', 'MySellerController@activity_buying');
    Route::get('activity_watching', 'MySellerController@activity_watching');
    Route::get('activity_saved_searches', 'MySellerController@activity_saved_searches');
    Route::get('activity_selling_overview', 'MySellerController@activity_selling_overview');
    Route::get('activity_selling_item', 'MySellerController@activity_selling_item');
    Route::get('activity_selling_drafts', 'MySellerController@activity_selling_drafts');
    Route::get('activity_selling_product', 'MySellerController@activity_selling_product');
    Route::get('activity_selling_discount', 'MySellerController@activity_selling_discount');
    Route::get('activity_selling_deliver', 'MySellerController@activity_selling_deliver');
    Route::get('activity_selling_complete', 'MySellerController@activity_selling_complete');
    Route::get('activity_selling_labels', 'MySellerController@activity_selling_labels');
});

# Remaining pages will be called from below controller method
# in real world scenario, you may be required to define all routes manually

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('{name?}', 'JoshController@showView');

});

#FrontEndController
Route::get('login', 'FrontEndController@getLogin')->name('login');
Route::post('login', 'FrontEndController@postLogin')->name('login');
Route::get('register', 'FrontEndController@getRegister')->name('register');
Route::post('register','FrontEndController@postRegister')->name('register');
Route::get('register_business', 'FrontEndController@getRegisterBusiness')->name('register_business');
Route::post('register_business','FrontEndController@postBusinessRegister')->name('register_business');
Route::get('activate/{userId}/{activationCode}','FrontEndController@getActivate')->name('activate');
Route::get('forgot-password','FrontEndController@getForgotPassword')->name('forgot-password');
Route::post('forgot-password', 'FrontEndController@postForgotPassword');

# Forgot Password Confirmation
Route::post('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@postForgotPasswordConfirm');
Route::get('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@getForgotPasswordConfirm')->name('forgot-password-confirm');
# My account display and update details
Route::group(['middleware' => 'user'], function () {
    Route::put('my-account', 'FrontEndController@update');
    Route::get('my-account', 'FrontEndController@myAccount')->name('my-account');
});
Route::get('logout', 'FrontEndController@getLogout')->name('logout');
# contact form
Route::post('contact', 'FrontEndController@postContact')->name('contact');

#frontend views
Route::get('/', ['as' => 'home', function () {
    return redirect('front/index');
}]);

Route::get('/globaldeals', ['as' => 'home1', function () {
    return view('globaldeals');
}]);

Route::get('/product', ['as' => 'home1', function () {
    return view('product');
}]);

Route::get('/find_products', function(){
   return view('find_products');
});

Route::get('/find_products_auction', function(){
    return view('find_products_auction');
});


Route::get('/all_categories1', function(){
    return view('all_categories');
});

Route::get('/sell', function(){
    return view('sell');
});

Route::get('/brand', function(){
    return view('brand');
});


Route::get('/categories', function(){
    return view('categories');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/visit_store', function(){
    return view('visit_store');
});



Route::get('/product_detail', ['as' => 'home1', function () {
    return view('product_detail');
}]);

Route::get('/product_auction_detail', ['as' => 'home1', function () {
    return view('product_auction_detail');
}]);



Route::get('/my_ebay', 'MyEbayController@showMyEbay');

Route::get('my_ebay_selling', ['as' => 'home1', function () {
    return view('my_ebay_selling');
}]);

Route::get('my_ebay_selling_item', ['as' => 'home1', function () {
    return view('my_ebay_selling_item');
}]);

Route::get('my_ebay_selling_sold', ['as' => 'home1', function () {
    return view('my_ebay_selling_sold');
}]);

Route::get('blog','BlogController@index')->name('blog');
Route::get('blog/{slug}/tag', 'BlogController@getBlogTag');
Route::get('blogitem/{slug?}', 'BlogController@getBlog');
Route::post('blogitem/{blog}/comment', 'BlogController@storeComment');

Route::get('{name?}', 'FrontEndController@showFrontEndView');
# End of frontend views
