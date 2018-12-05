<?php



Route::get('/', 'FrontendController@getFrontend');

//Route::get('/du-an', function () {
//    return view('frontend.project.index');
//});
Route::get('/du-an','FrontendController@getPageDuAn');

Route::get('/gioi-thieu', function () {
    return view('frontend.about-us.index');
});
Route::get('/bao-gia', 'FrontendController@getBaoGiaPage');

Route::get('/lien-he', function () {
    return view('frontend.contact.index');
});

Route::get('/dich-vu/{path}', 'FrontendController@getDetailPage')->defaults('type','dich-vu');
Route::get('/du-an/{path}', 'FrontendController@getDetailPage')->defaults('type','du-an');




Route::post('/tim-kiem','FrontendController@getSearch')->name('search');



Route::get('/admin/sml_login', 'AuthController@checklogin');
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('/admin/sml_logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    Route::resource('sml_admin/users', 'UserController');
    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //PAGE
    Route::get('sml_admin/page', ['as' => 'page.index', 'uses' => 'PageController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/page/create', ['as' => 'page.store', 'uses' => 'PageController@store', 'middleware' => ['permission:page-create']]);
    Route::post('sml_admin/page', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::get('sml_admin/page/create', ['as' => 'page.create', 'uses' => 'PageController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PageController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/page/{id}', ['as' => 'page.update', 'uses' => 'PageController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/page/{id}', ['as' => 'page.destroy', 'uses' => 'PageController@destroy', 'middleware' => ['permission:page-delete']]);

    //CATEGORY POST
    Route::get('sml_admin/danh-muc-bai-viet', ['as' => 'categorypost.index', 'uses' => 'CategoryPostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.store', 'uses' => 'CategoryPostController@store', 'middleware' => ['permission:page-create']]);
//    Route::post('sml_admin/danh-muc-bai-vie', ['as' => 'categorypost.search', 'uses' => 'TuyenDungController@search']);
    Route::get('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.create', 'uses' => 'CategoryPostController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/danh-muc-bai-viet/{id}/edit', ['as' => 'categorypost.edit', 'uses' => 'CategoryPostController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.update', 'uses' => 'CategoryPostController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.destroy', 'uses' => 'CategoryPostController@destroy', 'middleware' => ['permission:page-delete']]);

    //POST - SERVICE
    Route::get('sml_admin/post-service', ['as' => 'post-service.index', 'uses' => 'PostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']])->defaults('type','1');
    Route::post('sml_admin/post-service/create', ['as' => 'post-service.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','1');
    Route::post('sml_admin/post-service', ['as' => 'post-service.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/post-service/create', ['as' => 'post-service.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','1');
    Route::get('sml_admin/post-service/{id}/edit', ['as' => 'post-service.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','1');
    Route::patch('sml_admin/post-service/{id}', ['as' => 'post-service.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','1');
    Route::delete('sml_admin/post-service/{id}', ['as' => 'post-service.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','1');

    //POST - PROJECT
    Route::get('sml_admin/post-project', ['as' => 'post-project.index', 'uses' => 'PostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']])->defaults('type','2');
    Route::post('sml_admin/post-project/create', ['as' => 'post-project.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','2');
    Route::post('sml_admin/post-project', ['as' => 'post-project.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/post-project/create', ['as' => 'post-project.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','2');
    Route::get('sml_admin/post-project/{id}/edit', ['as' => 'post-project.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','2');
    Route::patch('sml_admin/post-project/{id}', ['as' => 'post-project.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','2');
    Route::delete('sml_admin/post-project/{id}', ['as' => 'post-project.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','2');

    //CATEGORY PRODUCT
    Route::get('sml_admin/danh-muc-san-pham', ['as' => 'categoryproduct.index', 'uses' => 'CategoryProductController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/danh-muc-san-pham/search', ['as' => 'categoryproduct.search', 'uses' => 'CategoryProductController@search']);
    Route::post('sml_admin/danh-muc-san-pham/paste', ['as' => 'categoryproduct.paste', 'uses' => 'CategoryProductController@paste']);
    Route::post('sml_admin/danh-muc-san-pham/create', ['as' => 'categoryproduct.store', 'uses' => 'CategoryProductController@store', 'middleware' => ['permission:page-create']]);
//    Route::post('sml_admin/danh-muc-bai-vie', ['as' => 'categorypost.search', 'uses' => 'TuyenDungController@search']);
    Route::get('sml_admin/danh-muc-san-pham/create', ['as' => 'categoryproduct.create', 'uses' => 'CategoryProductController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/danh-muc-san-pham/{id}/edit', ['as' => 'categoryproduct.edit', 'uses' => 'CategoryProductController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/danh-muc-san-pham/{id}', ['as' => 'categoryproduct.update', 'uses' => 'CategoryProductController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/danh-muc-san-pham/{id}', ['as' => 'categoryproduct.destroy', 'uses' => 'CategoryProductController@destroy', 'middleware' => ['permission:page-delete']]);

    //PRODUCT
    Route::get('sml_admin/san-pham', ['as' => 'product.index', 'uses' => 'ProductController@index', 'middleware' => ['permission:product-list|product-create|product-edit|product-delete']]);
    Route::post('sml_admin/san-pham/create', ['as' => 'product.store', 'uses' => 'ProductController@store', 'middleware' => ['permission:product-create']]);
    Route::post('sml_admin/san-pham/search', ['as' => 'product.search', 'uses' => 'ProductController@search']);
    Route::post('sml_admin/san-pham/past', ['as' => 'product.paste', 'uses' => 'ProductController@paste']);
    Route::get('sml_admin/san-pham/create', ['as' => 'product.create', 'uses' => 'ProductController@create', 'middleware' => ['permission:product-create']]);
    Route::get('sml_admin/san-pham/{id}/edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit', 'middleware' => ['permission:product-edit']]);
    Route::patch('sml_admin/san-pham/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update', 'middleware' => ['permission:product-edit']]);
    Route::delete('sml_admin/san-pham/{id}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy', 'middleware' => ['permission:product-delete']]);

    //CONFIG
    //------GENERAL
    Route::get('sml_admin/config/general', ['as' => 'config.general.index', 'uses' => 'ConfigGeneralController@getConfig']);
    Route::post('sml_admin/config/general', ['as' => 'config.general.store', 'uses' => 'ConfigGeneralController@saveConfig']);
    //-------EMAIL

    Route::get('sml_admin/config/email', ['as' => 'config.email.index', 'uses' => 'ConfigEmailController@getEmailConfig']);
    Route::post('sml_admin/config/email', ['as' => 'config.email.store', 'uses' => 'ConfigEmailController@saveEmailConfig']);


});
