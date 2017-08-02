<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('page/add', 'PageController@create');
Route::get('page/{page}/delete', [
    'as'   => 'page.delete',
    'uses' => 'PageController@destroy',
]);
Route::resource('/page', 'PageController');


function is_active_sorter($key, $direction = 'ASC')
{
    if (request('sortby') == $key && request('sortdir') == $direction) {
        return true;
    }

    return false;
}


