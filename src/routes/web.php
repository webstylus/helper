<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'Lojazone\Helper\Http\Controllers'], function () {

    Route::prefix('lojazone-helper')->group(function () {
        Route::get('/', 'HelperController@index')->name('lojazone_helper');
        Route::post('/form-test', 'HelperController@formTest')->name('lojazone_helper_from_test');
    });

});

