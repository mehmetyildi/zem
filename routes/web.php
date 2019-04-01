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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
    ],
    function () {
        Route::name('home')->get('/', 'HomeController@home');
        Route::name('corporate')->get('/about-us', 'HomeController@about_us');
        Route::name('hr')->get('/human-resources', 'HomeController@hr');
        Route::name('blog')->get('/blog', 'HomeController@blog');

        Route::name('product-categories')->get('/product-categories', 'HomeController@product_categories');
        Route::name('product-detail')->get('/product-detail', 'HomeController@product_detail');
        Route::name('news')->get('/news', 'HomeController@news');
        Route::name('news-detail')->get('/news-detail/{url}', 'HomeController@news_detail');
        Route::name('projects')->get('/projects', 'HomeController@projects');
        Route::name('project-detail')->get('/project-detail', 'HomeController@project_detail');
        Route::name('contact')->get('contact', 'HomeController@contact');

    });

/*Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::group(['middleware' => ['web']], function () {
        /* Pages
        Route::name('comning-soon')->get('/', 'HomeController@welcome');
        Route::name('home')->get('/', 'HomeController@index');
        if(app()->getLocale() == 'tr'){
            Route::name('references')->get('/referanslar', 'HomeController@references');
        }else{
            Route::name('references')->get('/references', 'HomeController@references');
        }
        if(app()->getLocale() == 'tr'){
            Route::name('search')->get('/arama', 'SearchController@search');
        }else{
            Route::name('search')->get('/search', 'SearchController@search');
        }

        if(app()->getLocale() == 'tr'){
            Route::name('about')->get('/hakkimizda', 'HomeController@about');
        }else{
            Route::name('about')->get('/about', 'HomeController@about');
        }
        if(app()->getLocale() == 'tr'){
            Route::name('hr')->get('/insan-kaynaklari', 'HomeController@hr');
        }else{
            Route::name('hr')->get('/human-resources', 'HomeController@hr');
        }
        if(app()->getLocale() == 'tr'){
            Route::name('ask-offer')->get('/teklif-iste', 'HomeController@offer');
        }else{
            Route::name('ask-offer')->get('/request-offer', 'HomeController@offer');
        }

        if(app()->getLocale() == 'tr'){
            Route::name('zmf-promise')->get('/zmf-farki', 'HomeController@zmf');
        }else{
            Route::name('zmf-promise')->get('/zmf-promise', 'HomeController@zmf');
        }

        if(app()->getLocale() == 'tr'){
            Route::name('contact')->get('/iletisim', 'HomeController@contact');
        }else{
            Route::name('contact')->get('/contact', 'HomeController@contact');
        }
        if(app()->getLocale() == 'tr'){
            Route::name('projects.index')->get('/projeler', 'ProjectsController@index');
            Route::name('projects.detail')->get('/projeler/{url}', 'ProjectsController@detail');
        }else{
            Route::name('projects.index')->get('/projects', 'ProjectsController@index');
            Route::name('projects.detail')->get('/projects/{url}', 'ProjectsController@detail');
        }
        if(app()->getLocale() == 'tr'){
            Route::name('articles.index')->get('/blog', 'ArticlesController@index');
            Route::name('articles.detail')->get('/blog/{url}', 'ArticlesController@detail');
        }else{
            Route::name('articles.index')->get('/blog', 'ArticlesController@index');
            Route::name('articles.detail')->get('/blog/{url}', 'ArticlesController@detail');
        }

        if(app()->getLocale() == 'tr'){
            Route::name('products.index')->get('/urunler', 'ProductsController@index');
            Route::name('products.category')->get('/urunler/{category}', 'ProductsController@category');
            Route::name('products.detail')->get('/urunler/{category}/{url}', 'ProductsController@detail');
        }else{
            Route::name('products.index')->get('/products', 'ProductsController@index');
            Route::name('products.category')->get('/products/{category}', 'ProductsController@category');
            Route::name('products.detail')->get('/products/{category}/{url}', 'ProductsController@detail');
        }

        Route::name('validate-mailgun')->get('/validate-mailgun/{email}', 'ValidationController@validateMailgun');

        Route::name('mail.contact')->post('/contact', 'EmailController@contact');
        Route::name('mail.job')->post('/job', 'EmailController@job');
        Route::name('mail.quick-offer')->post('/quick-offer', 'EmailController@quickOffer');
        Route::name('mail.offer')->post('/offer', 'EmailController@offer');
    });
});*/

Auth::routes();

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::prefix(config('app.cms_path'))->middleware('auth')->as('cms.')->namespace('Cms')->group(function(){
        Route::name('home')->get('/home', 'HomeController@index');
        Route::name('search')->get('/search', 'SearchController@search');
        Route::name('change-settings')->post('/settings', 'UserProfileController@changeSettings');
        Route::name('change-profile-photo.index')->get('/change-profile-photo', 'UserProfileController@changeProfilePhoto');
        Route::name('change-profile-photo.store')->post('/change-profile-photo', 'UserProfileController@storeProfilePhoto');

        Route::name('tasks.index')->get('/tasks', 'TasksController@index');
        Route::name('tasks.store')->post('/tasks', 'TasksController@store');
        Route::name('tasks.update')->post('/tasks/update', 'TasksController@update');
        Route::name('tasks.fetch')->get('/tasks/fetch', 'TasksController@fetch');
        Route::name('tasks.order')->post('/tasks/order', 'TasksController@order');
        Route::name('tasks.orderCompleted')->post('/tasks/orderCompleted', 'TasksController@orderCompleted');

        Route::prefix('user-management')->as('user-management.')->namespace('UserManagement')->group(function(){
            Route::name('roles.index')->get('/roles', 'RolesController@index');
            Route::name('roles.store')->post('/roles', 'RolesController@store');
            Route::name('roles.create')->get('/roles/create', 'RolesController@create');
            Route::name('roles.edit')->get('/roles/{role}/edit', 'RolesController@edit');
            Route::name('roles.update')->put('/roles/{role}', 'RolesController@update');
            Route::name('roles.delete')->delete('/roles/{role}', 'RolesController@delete');

            Route::name('permissions.index')->get('/permissions', 'PermissionsController@index');
            Route::name('permissions.create')->get('/permissions/create', 'PermissionsController@create');
            Route::name('permissions.store')->post('/permissions', 'PermissionsController@store');
            Route::name('permissions.edit')->get('/permissions/{permission}/edit', 'PermissionsController@edit');
            Route::name('permissions.update')->put('/permissions/{permission}', 'PermissionsController@update');
            Route::name('permissions.delete')->delete('/permissions/{permission}', 'PermissionsController@delete');

            Route::name('users.index')->get('/users', 'UsersController@index');
            Route::name('users.store')->post('/users', 'UsersController@store');
            Route::name('users.create')->get('/users/create', 'UsersController@create');
            Route::name('users.edit')->get('/users/{user}/edit', 'UsersController@edit');
            Route::name('users.update')->put('/users/{user}', 'UsersController@update');
            Route::name('users.delete')->delete('/users/{invitee}', 'UsersController@delete');
            Route::name('users.ban')->put('/users/{user}/ban', 'UsersController@ban');
            Route::name('users.reactivate')->put('/users/{user}/reactivate', 'UsersController@reactivate');
        });

        Route::prefix('forms')->as('forms.')->namespace('Forms')->group(function(){
            Route::name('index')->get('/', 'FormsController@index');
            Route::name('store')->post('/', 'FormsController@store');
            Route::name('create')->get('/create', 'FormsController@create');
            Route::name('edit')->get('/{form}/edit', 'FormsController@edit');
            Route::name('update')->put('/{form}', 'FormsController@update');
            Route::name('delete')->delete('/{form}', 'FormsController@delete');

            Route::name('categories.store')->post('/categories', 'CategoriesController@store');
            Route::name('categories.create')->get('/categories/{form}/create', 'CategoriesController@create');
            Route::name('categories.edit')->get('/categories/{category}/edit', 'CategoriesController@edit');
            Route::name('categories.update')->put('/categories/{category}', 'CategoriesController@update');
            Route::name('categories.delete')->delete('/categories/{category}', 'CategoriesController@delete');
        });

        Route::prefix('inbox')->as('inbox.')->namespace('Inbox')->group(function(){
            Route::name('index')->get('/', 'InboxController@index');
            Route::name('sent')->get('/sent', 'InboxController@sent');
            Route::name('trash')->get('/trash', 'InboxController@trash');
            Route::name('important')->get('/important', 'InboxController@important');
            Route::name('drafts')->get('/drafts', 'InboxController@drafts');
            Route::name('form')->get('/form/{form}', 'InboxController@form');
            Route::name('category')->get('/category/{category}', 'InboxController@category');
            Route::name('detail')->get('/{mail}/detail', 'InboxController@detail');
            Route::name('edit')->get('/{mail}/edit', 'InboxController@edit');
            Route::name('reply')->get('/{mail}/reply', 'InboxController@reply');
            Route::name('compose')->get('/compose', 'InboxController@compose');
            Route::name('search')->get('/search', 'InboxController@search');

            Route::name('send')->post('/send', 'InboxController@send');
            Route::name('save-draft')->post('/save-draft', 'InboxController@saveDraft');
            Route::name('update')->post('/{mail}/update', 'InboxController@update');
            Route::name('delete')->put('/delete', 'InboxController@delete');
            Route::name('discard')->delete('/discard', 'InboxController@discard');
            Route::name('mark-as-important')->post('/mark-as-important', 'InboxController@markAsImportant');
            Route::name('mark-as-read')->post('/mark-as-read', 'InboxController@markAsRead');
            Route::name('mark-as-trash')->post('/mark-as-trash', 'InboxController@markAsTrash');
            Route::name('move-to-trash')->post('/{mail}/move-to-trash', 'InboxController@moveToTrash');
        });

        Route::prefix('file-manager')->as('file-manager.')->namespace('FileManager')->group(function(){
            Route::name('index')->get('/', 'FileManagerController@index');
            Route::name('store')->post('/', 'FileManagerController@store');
            Route::name('detail')->get('/{folder}/detail', 'FileManagerController@detail');
            Route::name('delete')->delete('/{file}', 'FileManagerController@delete');
            Route::name('categories.store')->post('/categories', 'CategoriesController@store');
        });

        Route::prefix('sectors')->as('sectors.')->namespace('Sectors')->group(function(){
            Route::name('index')->get('/', 'SectorsController@index');
            Route::name('store')->post('/', 'SectorsController@store');
            Route::name('create')->get('/create', 'SectorsController@create');
            Route::name('sort')->get('/sort', 'SectorsController@sort');
            Route::name('sort-records')->post('/sort-records', 'SectorsController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'SectorsController@edit');
            Route::name('update')->put('/{record}', 'SectorsController@update');
            Route::name('delete')->delete('/{record}', 'SectorsController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'SectorsController@deleteFile');
             Route::name('toggle-promotion')->post('/toggle-promotion', 'SectorsController@togglePromotion');
        });

        Route::prefix('slides')->as('slides.')->namespace('Slides')->group(function(){
            Route::name('index')->get('/', 'SlidesController@index');
            Route::name('store')->post('/', 'SlidesController@store');
            Route::name('create')->get('/create', 'SlidesController@create');
            Route::name('sort')->get('/sort', 'SlidesController@sort');
            Route::name('sort-records')->post('/sort-records', 'SlidesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'SlidesController@edit');
            Route::name('update')->put('/{record}', 'SlidesController@update');
            Route::name('delete')->delete('/{record}', 'SlidesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'SlidesController@deleteFile');
             Route::name('toggle-promotion')->post('/toggle-promotion', 'SlidesController@togglePromotion');
        });

        Route::prefix('cities')->as('cities.')->namespace('Cities')->group(function(){
            Route::name('index')->get('/', 'CitiesController@index');
            Route::name('store')->post('/', 'CitiesController@store');
            Route::name('create')->get('/create', 'CitiesController@create');
            Route::name('sort')->get('/sort', 'CitiesController@sort');
            Route::name('sort-records')->post('/sort-records', 'CitiesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'CitiesController@edit');
            Route::name('update')->put('/{record}', 'CitiesController@update');
            Route::name('delete')->delete('/{record}', 'CitiesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'CitiesController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'CitiesController@togglePromotion');
        });

        Route::prefix('employees')->as('employees.')->namespace('Employees')->group(function(){
            Route::name('index')->get('/', 'EmployeesController@index');
            Route::name('store')->post('/', 'EmployeesController@store');
            Route::name('create')->get('/create', 'EmployeesController@create');
            Route::name('sort')->get('/sort', 'EmployeesController@sort');
            Route::name('sort-records')->post('/sort-records', 'EmployeesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'EmployeesController@edit');
            Route::name('update')->put('/{record}', 'EmployeesController@update');
            Route::name('delete')->delete('/{record}', 'EmployeesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'EmployeesController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'EmployeesController@togglePromotion');
        });

        Route::prefix('references')->as('references.')->namespace('References')->group(function(){
            Route::name('index')->get('/', 'ReferencesController@index');
            Route::name('store')->post('/', 'ReferencesController@store');
            Route::name('create')->get('/create', 'ReferencesController@create');
            Route::name('sort')->get('/sort', 'ReferencesController@sort');
            Route::name('sort-records')->post('/sort-records', 'ReferencesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'ReferencesController@edit');
            Route::name('update')->put('/{record}', 'ReferencesController@update');
            Route::name('delete')->delete('/{record}', 'ReferencesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'ReferencesController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'ReferencesController@togglePromotion');
        });

        Route::prefix('customers')->as('customers.')->namespace('Customers')->group(function(){
            Route::name('index')->get('/', 'CustomersController@index');
            Route::name('store')->post('/', 'CustomersController@store');
            Route::name('create')->get('/create', 'CustomersController@create');
            Route::name('sort')->get('/sort', 'CustomersController@sort');
            Route::name('sort-records')->post('/sort-records', 'CustomersController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'CustomersController@edit');
            Route::name('update')->put('/{record}', 'CustomersController@update');
            Route::name('delete')->delete('/{record}', 'CustomersController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'CustomersController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'CustomersController@togglePromotion');
        });

        Route::prefix('project-types')->as('project-types.')->namespace('ProjectTypes')->group(function(){
            Route::name('index')->get('/', 'ProjectTypesController@index');
            Route::name('store')->post('/', 'ProjectTypesController@store');
            Route::name('create')->get('/create', 'ProjectTypesController@create');
            Route::name('sort')->get('/sort', 'ProjectTypesController@sort');
            Route::name('sort-records')->post('/sort-records', 'ProjectTypesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'ProjectTypesController@edit');
            Route::name('update')->put('/{record}', 'ProjectTypesController@update');
            Route::name('delete')->delete('/{record}', 'ProjectTypesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'ProjectTypesController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'ProjectTypesController@togglePromotion');
        });

        Route::prefix('categories')->as('categories.')->namespace('Categories')->group(function(){
            Route::name('index')->get('/', 'CategoriesController@index');
            Route::name('store')->post('/', 'CategoriesController@store');
            Route::name('create')->get('/create', 'CategoriesController@create');
            Route::name('sort')->get('/sort', 'CategoriesController@sort');
            Route::name('sort-records')->post('/sort-records', 'CategoriesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'CategoriesController@edit');
            Route::name('update')->put('/{record}', 'CategoriesController@update');
            Route::name('delete')->delete('/{record}', 'CategoriesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'CategoriesController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'CategoriesController@togglePromotion');
        });

        Route::prefix('articles')->as('articles.')->namespace('Articles')->group(function(){
            Route::name('index')->get('/', 'ArticlesController@index');
            Route::name('store')->post('/', 'ArticlesController@store');
            Route::name('create')->get('/create', 'ArticlesController@create');
            Route::name('sort')->get('/sort', 'ArticlesController@sort');
            Route::name('sort-records')->post('/sort-records', 'ArticlesController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'ArticlesController@edit');
            Route::name('update')->put('/{record}', 'ArticlesController@update');
            Route::name('delete')->delete('/{record}', 'ArticlesController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'ArticlesController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'ArticlesController@togglePromotion');

            Route::name('gallery')->get('/{record}/gallery', 'GalleryController@index');
            Route::name('gallery.edit')->get('/gallery/{record}/edit', 'GalleryController@edit');
            Route::name('gallery.update')->put('/gallery/{record}', 'GalleryController@update');
            Route::name('gallery.store')->post('/gallery', 'GalleryController@store');
            Route::name('gallery.delete')->delete('/gallery/{record}/delete', 'GalleryController@delete');
            Route::name('gallery.sort-records')->post('/gallery/sort-records', 'GalleryController@sortRecords');
        });

        Route::prefix('projects')->as('projects.')->namespace('Projects')->group(function(){
            Route::name('index')->get('/', 'ProjectsController@index');
            Route::name('store')->post('/', 'ProjectsController@store');
            Route::name('create')->get('/create', 'ProjectsController@create');
            Route::name('sort')->get('/sort', 'ProjectsController@sort');
            Route::name('sort-records')->post('/sort-records', 'ProjectsController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'ProjectsController@edit');
            Route::name('update')->put('/{record}', 'ProjectsController@update');
            Route::name('delete')->delete('/{record}', 'ProjectsController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'ProjectsController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'ProjectsController@togglePromotion');

            Route::name('gallery')->get('/{record}/gallery', 'GalleryController@index');
            Route::name('gallery.edit')->get('/gallery/{record}/edit', 'GalleryController@edit');
            Route::name('gallery.update')->put('/gallery/{record}', 'GalleryController@update');
            Route::name('gallery.store')->post('/gallery', 'GalleryController@store');
            Route::name('gallery.delete')->delete('/gallery/{record}/delete', 'GalleryController@delete');
            Route::name('gallery.sort-records')->post('/gallery/sort-records', 'GalleryController@sortRecords');
        });

        Route::prefix('products')->as('products.')->namespace('Products')->group(function(){
            Route::name('index')->get('/', 'ProductsController@index');
            Route::name('store')->post('/', 'ProductsController@store');
            Route::name('create')->get('/create', 'ProductsController@create');
            Route::name('sort')->get('/sort', 'ProductsController@sort');
            Route::name('sort-records')->post('/sort-records', 'ProductsController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'ProductsController@edit');
            Route::name('update')->put('/{record}', 'ProductsController@update');
            Route::name('delete')->delete('/{record}', 'ProductsController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'ProductsController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'ProductsController@togglePromotion');

            Route::name('gallery')->get('/{record}/gallery', 'GalleryController@index');
            Route::name('gallery.edit')->get('/gallery/{record}/edit', 'GalleryController@edit');
            Route::name('gallery.update')->put('/gallery/{record}', 'GalleryController@update');
            Route::name('gallery.store')->post('/gallery', 'GalleryController@store');
            Route::name('gallery.delete')->delete('/gallery/{record}/delete', 'GalleryController@delete');
            Route::name('gallery.sort-records')->post('/gallery/sort-records', 'GalleryController@sortRecords');
        });

        Route::prefix('popups')->as('popups.')->namespace('Popups')->group(function(){
            Route::name('index')->get('/', 'PopupsController@index');
            Route::name('store')->post('/', 'PopupsController@store');
            Route::name('create')->get('/create', 'PopupsController@create');
            Route::name('sort')->get('/sort', 'PopupsController@sort');
            Route::name('sort-records')->post('/sort-records', 'PopupsController@sortRecords');
            Route::name('edit')->get('/{record}/edit', 'PopupsController@edit');
            Route::name('update')->put('/{record}', 'PopupsController@update');
            Route::name('delete')->delete('/{record}', 'PopupsController@delete');
            Route::name('delete-file')->delete('/{record}/delete-file', 'PopupsController@deleteFile');
            Route::name('toggle-promotion')->post('/toggle-promotion', 'PopupsController@togglePromotion');
        });
    });
});