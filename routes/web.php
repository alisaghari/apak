<?php

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

Route::get('/', function () {
    return view('admin.welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => [\App\Http\Middleware\CheckAdmin::class]],function () {
    //users
    Route::get('users',"userController@users");
    Route::get('user/delete/{id}',"userController@user_delete");
    Route::get('user/update/{id}',"userController@user_update_view");
    Route::post('user/update',"userController@user_update");
    Route::post('user/search',"userController@user_search");
    Route::post('user/add',"userController@user_add");

    //factories
    Route::get('factories',"userController@factories");
    Route::get('factory/delete/{id}',"userController@factory_delete");
    Route::get('factory/update/{id}',"userController@factory_update_view");
    Route::post('factory/update',"userController@factory_update");
    Route::post('factory/search',"userController@factory_search");
    Route::post('factory/add',"userController@factory_add");

    //package
    Route::get('packages/link',"packageController@packages_link");
    Route::post('package/link/add',"packageController@packages_link_add");
    /*nikmehr*/Route::get('package/link/update/{id}',"packageController@packages_link_update_view");
    /*nikmehr*/Route::post('package/link/update',"packageController@package_link_update");

    Route::get('packages/download',"packageController@packages_download");
    Route::post('package/download/add',"packageController@packages_download_add");
    Route::get('packages/image',"packageController@packages_image");
    /*nikmehr*/Route::get('package/download/update/{id}',"packageController@package_download_update_view");
    /*nikmehr*/Route::post('package/download/update',"packageController@package_download_update");

    Route::get('package/delete/{id}',"packageController@packages_delete");
    /*nikmehr*/Route::post('package/image/add',"packageController@packages_image_add");
    /*nikmehr*/Route::get('package/image/update/{id}',"packageController@package_image_update_view");
    /*nikmehr*/Route::post('package/image/update',"packageController@package_image_update");

    //setting
    /*nikmehr*/Route::get('menu',"MenuController@menu");

    /*nikmehr*/Route::get('slider',"SliderController@slider");
    /*nikmehr*/Route::post('slider/image/add',"SliderController@slider_add_image");
    /*nikmehr*/Route::get('slider/image/delete/{id}',"SliderController@slider_delete_image");

    /*nikmehr*/Route::get('footer',"FooterController@index");
    /*nikmehr*/Route::get('comment',"CommentController@index");
    /*nikmehr*/Route::get('blog',"BlogController@index");

    //auction
    Route::get('auctions',"auctionController@auctions");
    Route::post('auction/add',"auctionController@auction_add");
    Route::get('auction/update/{id}',"auctionController@auction_update_view");
    Route::get('auction/delete/{id}',"auctionController@auction_delete");
    Route::get('auction/gallery/{id}',"auctionController@auction_gallery");
    Route::post('auction/gallery/add',"auctionController@auction_gallery_add");
    Route::get('auction/gallery/delete/{id}',"auctionController@auction_gallery_delete");
    Route::post('auction/update',"auctionController@auction_update");

 //blog
    Route::get('blogs',"BlogController@blogs");
    Route::post('blog/add',"BlogController@blog_add");
    Route::get('blog/update/{id}',"BlogController@blog_update_view");
    Route::get('blog/delete/{id}',"BlogController@blog_delete");
    Route::get('blog/category',"BlogController@blog_category");
    Route::post('blog/category/add',"BlogController@blog_category_add");
    Route::get('blog/category/delete/{id}',"BlogController@blog_category_delete");
    Route::post('blog/update',"BlogController@blog_update");

//Products
    /*nikmehr*/Route::get('product_category','ProductCategoryController@product_categories');
    /*nikmehr*/Route::post('product_category/add',"ProductCategoryController@product_categories_add");
    /*nikmehr*/Route::get('product_category/update/{id}',"ProductCategoryController@product_categories_update_view");
    /*nikmehr*/Route::post('product_category/update',"ProductCategoryController@product_categories_update");
    /*nikmehr*/Route::get('product_category/delete/{id}',"ProductCategoryController@product_categories_delete");

});
Auth::routes();
//verify
Route::get('admin/verify',"userController@verify");
Route::post('admin/verify/check',"userController@verifyCheck");
Route::get('/home', 'HomeController@index')->name('home');
