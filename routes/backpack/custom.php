<<<<<<< HEAD
<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('article', 'ArticleCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('tag', 'TagCrudController');
}); // this should be the absolute last line of this file

// Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
//     // Backpack\NewsCRUD
//     Route::crud('article', 'ArticleCrudController');
//     Route::crud('category', 'CategoryCrudController');
//     Route::crud('tag', 'TagCrudController');
=======
<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('article', 'ArticleCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('tag', 'TagCrudController');
}); // this should be the absolute last line of this file

// Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
//     // Backpack\NewsCRUD
//     Route::crud('article', 'ArticleCrudController');
//     Route::crud('category', 'CategoryCrudController');
//     Route::crud('tag', 'TagCrudController');
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
// });