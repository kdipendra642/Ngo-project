<?php

use App\User;
use App\Models\Posts;
use App\Models\Category;

Route::get('/dashboard', function () {
    $users = User::all();
    $category = Category::all();
    $posts = Posts::all();

    return view('admin.common.dashboard', compact('users', 'category', 'posts'));
})->middleware('auth');

Route::get('/',                                            ['as' => 'customer.index',              'uses' =>   'Frontend\SiteController@index']);
Route::get('/about-us',                                            ['as' => 'customer.about-us',              'uses' =>   'Frontend\SiteController@about']);
Route::get('/objectives',                                            ['as' => 'customer.objectives',              'uses' =>   'Frontend\SiteController@objectives']);
Route::get('/working-approach',                                            ['as' => 'customer.working',              'uses' =>   'Frontend\SiteController@working']);
Route::get('/teams',                                            ['as' => 'customer.team',              'uses' =>   'Frontend\SiteController@teams']);
Route::get('/gallery',                                            ['as' => 'customer.gallery',              'uses' =>   'Frontend\SiteController@gallery']);
Route::get('/category',                                            ['as' => 'customer.category',              'uses' =>   'Frontend\SiteController@category']);
Route::get('/category/{id}',                                            ['as' => 'customer.view-category',              'uses' =>   'Frontend\SiteController@viewCategory']);
Route::get('/posts/{slug}',                                            ['as' => 'customer.view-posts',              'uses' =>   'Frontend\SiteController@viewPosts']);
Route::get('/contact-us',                                  ['as' => 'customer.contact',              'uses' =>   'Frontend\SiteController@contact']);
Route::post('/contact-us/store',                           ['as' => 'customer.contact-us.store',    'uses' =>   'Admin\ContactController@store']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'namespace' => 'Admin\\', 'middleware' => ['auth']], function (){

    /*Routes for banner section */
    Route::get('/banner',                   ['as' => 'banner',          'uses' =>   'BannerController@index']);
    Route::get('/banner/create',            ['as' => 'banner.create',   'uses' =>   'BannerController@create']);
    Route::post('/banner/store',            ['as' => 'banner.store',    'uses' =>   'BannerController@store']);
    Route::get('/banner/edit/{id}',         ['as' => 'banner.edit',     'uses' =>   'BannerController@edit']);
    Route::post('/banner/update/{id}',      ['as' => 'banner.update',   'uses' =>   'BannerController@update']);
    Route::get('/banner/delete/{id}',       ['as' => 'banner.delete',   'uses' =>   'BannerController@destroy']);

    /*Routes for donors section */
    Route::get('/donors',                   ['as' => 'donors',          'uses' =>   'DonorsController@index']);
    Route::get('/donors/create',            ['as' => 'donors.create',   'uses' =>   'DonorsController@create']);
    Route::post('/donors/store',            ['as' => 'donors.store',    'uses' =>   'DonorsController@store']);
    Route::get('/donors/edit/{id}',         ['as' => 'donors.edit',     'uses' =>   'DonorsController@edit']);
    Route::post('/donors/update/{id}',      ['as' => 'donors.update',   'uses' =>   'DonorsController@update']);
    Route::get('/donors/delete/{id}',       ['as' => 'donors.delete',   'uses' =>   'DonorsController@destroy']);

    /*Routes for staff section */
    Route::get('/staff',                   ['as' => 'staff',          'uses' =>   'StaffController@index']);
    Route::get('/staff/create',            ['as' => 'staff.create',   'uses' =>   'StaffController@create']);
    Route::post('/staff/store',            ['as' => 'staff.store',    'uses' =>   'StaffController@store']);
    Route::get('/staff/edit/{id}',         ['as' => 'staff.edit',     'uses' =>   'StaffController@edit']);
    Route::post('/staff/update/{id}',      ['as' => 'staff.update',   'uses' =>   'StaffController@update']);
    Route::get('/staff/delete/{id}',       ['as' => 'staff.delete',   'uses' =>   'StaffController@destroy']);

     /*Routes for category section */
     Route::get('/category',                   ['as' => 'category',          'uses' =>   'CategoryController@index']);
     Route::get('/category/create',            ['as' => 'category.create',   'uses' =>   'CategoryController@create']);
     Route::post('/category/store',            ['as' => 'category.store',    'uses' =>   'CategoryController@store']);
     Route::get('/category/edit/{id}',         ['as' => 'category.edit',     'uses' =>   'CategoryController@edit']);
     Route::post('/category/update/{id}',      ['as' => 'category.update',   'uses' =>   'CategoryController@update']);
     Route::get('/category/delete/{id}',       ['as' => 'category.delete',   'uses' =>   'CategoryController@destroy']);

      /*Routes for post section */
      Route::get('/posts',                   ['as' => 'posts',          'uses' =>   'PostsController@index']);
      Route::get('/posts/create',            ['as' => 'posts.create',   'uses' =>   'PostsController@create']);
      Route::post('/posts/store',            ['as' => 'posts.store',    'uses' =>   'PostsController@store']);
      Route::get('/posts/edit/{id}',         ['as' => 'posts.edit',     'uses' =>   'PostsController@edit']);
      Route::post('/posts/update/{id}',      ['as' => 'posts.update',   'uses' =>   'PostsController@update']);
      Route::get('/posts/delete/{id}',       ['as' => 'posts.delete',   'uses' =>   'PostsController@destroy']);
      Route::get('/multipic/delete/{id}',       ['as' => 'multipic.delete',   'uses' =>   'PostsController@destroy_image']);

       /*Routes for gallery section */
       Route::get('/gallery',                   ['as' => 'gallery',          'uses' =>   'GalleryController@index']);
       Route::get('/gallery/create',            ['as' => 'gallery.create',   'uses' =>   'GalleryController@create']);
       Route::post('/gallery/store',            ['as' => 'gallery.store',    'uses' =>   'GalleryController@store']);
       Route::get('/gallery/delete/{id}',       ['as' => 'gallery.delete',   'uses' =>   'GalleryController@destroy']);

       /*Routes for contacts */
      Route::get('/contact',                   ['as' => 'contact',          'uses' =>   'ContactController@index']);
      Route::get('/contact/create',            ['as' => 'contact.create',   'uses' =>   'ContactController@create']);
      Route::get('/contact/edit/{id}',         ['as' => 'contact.edit',     'uses' =>   'ContactController@edit']);
      Route::post('/contact/update/{id}',      ['as' => 'contact.update',   'uses' =>   'ContactController@update']);
      Route::get('/contact/delete/{id}',       ['as' => 'contact.delete',   'uses' =>   'ContactController@destroy']);
  

        /* These are the routes for settings */
        Route::get('/settings',                   ['as' => 'settings',          'uses' =>   'SiteSettingsController@index']);
        // Route::get('/settings/create',            ['as' => 'settings.create',          'uses' =>   'SiteSettingsController@create']);
        // Route::post('/settings/store',            ['as' => 'settings.store',    'uses' =>   'SiteSettingsController@store']);
        Route::post('/settings/update/{id}',      ['as' => 'settings.update',   'uses' =>   'SiteSettingsController@update']);

        // Dynamic menus
        Route::get('/menus',                   ['as' => 'menus',          'uses' =>   'SiteSettingsController@menu']);


});

// These are the routes to register user
Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'namespace' => 'Auth\\', 'middleware' => ['auth']], function (){
    Route::get('/register',                    ['as' => 'register',  'uses' =>   'RegisterController@index']);
    Route::get('/register/create',             ['as' => 'register.create',  'uses' =>   'RegisterController@create']);
    Route::post('/register/store',             ['as' => 'register.store',  'uses' =>   'RegisterController@store']);
    Route::get('/register/show/{id}',          ['as' => 'register.show',  'uses' =>   'RegisterController@show']);
    Route::get('/register/edit/{id}',          ['as' => 'register.edit',  'uses' =>   'RegisterController@edit']);
    Route::post('/register/update/{id}',       ['as' => 'register.update',  'uses' =>   'RegisterController@update']);
    Route::get('/register/delete/{id}',        ['as' => 'register.delete',  'uses' =>   'RegisterController@destroy']);
});

Route::get('/register', 'Auth\RegisterController@index')->name('admin.register')->middleware('auth');