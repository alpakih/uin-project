<?php

Route::group(['as' => 'backend::', 'namespace' => 'Backend', 'middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::get('/', ['as' => 'welcome', function(){
        return redirect()->route('backend::dashboard.index');
    }]);

    Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);

    # ProfileController
    Route::get('profile/{id?}', ['as' => 'profile.index', 'uses' => 'ProfileController@index']);
    Route::put('profile/{id}', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);

    # UserController
    Route::get('user', ['as' => 'user.index', 'middleware' => 'access:index,admin/user', 'uses' => 'UserController@index']);
    Route::get('user/datatables', ['as' => 'user.datatables', 'middleware' => 'access:index,admin/user', 'uses' => 'UserController@datatables']);
    Route::get('user/detail/{id}', ['as' => 'user.detail', 'middleware' => 'access:detail,admin/user', 'uses' => 'UserController@detail']);
    Route::get('user/create', ['as' => 'user.create', 'middleware' => 'access:create,admin/user', 'uses' => 'UserController@create']);
    Route::post('user/create', ['as' => 'user.store', 'middleware' => 'access:create,admin/user', 'uses' => 'UserController@store']);
    Route::get('user/activate/{id}', ['as' => 'user.activate.get', 'middleware' => 'access:activate,admin/user', 'uses' => 'UserController@getActivate']);
    Route::post('user/activate/{id}', ['as' => 'user.activate.post', 'middleware' => 'access:activate,admin/user', 'uses' => 'UserController@postActivate']);
    Route::get('user/deactivate/{id}', ['as' => 'user.deactivate.get', 'middleware' => 'access:deactivate,admin/user', 'uses' => 'UserController@getDeactivate']);
    Route::post('user/deactivate/{id}', ['as' => 'user.deactivate.post', 'middleware' => 'access:deactivate,admin/user', 'uses' => 'UserController@postDeactivate']);

    # RoleController
    Route::get('role', ['as' => 'role.index', 'middleware' => 'access:index,admin/role', 'uses' => 'RoleController@index']);
    Route::get('role/datatables', ['as' => 'role.datatables', 'middleware' => 'access:index,admin/role', 'uses' => 'RoleController@datatables']);
    Route::get('role/detail/{id}', ['as' => 'role.detail', 'middleware' => 'access:detail,admin/role', 'uses' => 'RoleController@detail']);
    Route::get('role/create', ['as' => 'role.create', 'middleware' => 'access:create,admin/role', 'uses' => 'RoleController@create']);
    Route::post('role/create', ['as' => 'role.store', 'middleware' => 'access:create,admin/role', 'uses' => 'RoleController@store']);
    Route::get('role/edit/{id}', ['as' => 'role.edit', 'middleware' => 'access:update,admin/role', 'uses' => 'RoleController@edit']);
    Route::put('role/edit/{id}', ['as' => 'role.update', 'middleware' => 'access:update,admin/role', 'uses' => 'RoleController@update']);
    Route::get('role/delete/{id}', ['as' => 'role.delete', 'middleware' => 'access:delete,admin/role', 'uses' => 'RoleController@delete']);
    Route::delete('role/delete/{id}', ['as' => 'role.destroy', 'middleware' => 'access:delete,admin/role', 'uses' => 'RoleController@destroy']);

    # MenuController
    Route::get('menu', ['as' => 'menu.index', 'middleware' => 'access:index,admin/menu', 'uses' => 'MenuController@index']);
    Route::get('menu/detail/{id}', ['as' => 'menu.detail', 'middleware' => 'access:detail,admin/menu', 'uses' => 'MenuController@detail']);
    Route::get('menu/create', ['as' => 'menu.create', 'middleware' => 'access:create,admin/menu', 'uses' => 'MenuController@create']);
    Route::post('menu/create', ['as' => 'menu.store', 'middleware' => 'access:create,admin/menu', 'uses' => 'MenuController@store']);
    Route::get('menu/edit/{id}', ['as' => 'menu.edit', 'middleware' => 'access:update,admin/menu', 'uses' => 'MenuController@edit']);
    Route::put('menu/edit/{id}', ['as' => 'menu.update', 'middleware' => 'access:update,admin/menu', 'uses' => 'MenuController@update']);
    Route::get('menu/delete/{id}', ['as' => 'menu.delete', 'middleware' => 'access:delete,admin/menu', 'uses' => 'MenuController@delete']);
    Route::delete('menu/delete/{id}', ['as' => 'menu.destroy', 'middleware' => 'access:delete,admin/menu', 'uses' => 'MenuController@destroy']);

    # LectureController
    Route::get('lecture', ['as' => 'lecture.index', 'middleware' => 'access:index,admin/lecture', 'uses' => 'LectureController@index']);
    Route::get('lecture/datatables', ['as' => 'lecture.datatables', 'middleware' => 'access:index,admin/lecture', 'uses' => 'LectureController@datatables']);
    Route::get('lecture/detail/{id}', ['as' => 'lecture.detail', 'middleware' => 'access:detail,admin/lecture', 'uses' => 'LectureController@detail']);
    Route::get('lecture/create', ['as' => 'lecture.create', 'middleware' => 'access:create,admin/lecture', 'uses' => 'LectureController@create']);
    Route::post('lecture/create', ['as' => 'lecture.store', 'middleware' => 'access:create,admin/lecture', 'uses' => 'LectureController@store']);
    Route::get('lecture/edit/{id}', ['as' => 'lecture.edit', 'middleware' => 'access:update,admin/lecture', 'uses' => 'LectureController@edit']);
    Route::put('lecture/edit/{id}', ['as' => 'lecture.update', 'middleware' => 'access:update,admin/lecture', 'uses' => 'LectureController@update']);
    Route::get('lecture/delete/{id}', ['as' => 'lecture.delete', 'middleware' => 'access:delete,admin/lecture', 'uses' => 'LectureController@delete']);
    Route::delete('lecture/delete/{id}', ['as' => 'lecture.destroy', 'middleware' => 'access:delete,admin/lecture', 'uses' => 'LectureController@destroy']);

    # KelasControler
    Route::get('kelas', ['as' => 'kelas.index', 'middleware' => 'access:index,admin/kelas', 'uses' => 'KelasController@index']);
    Route::get('kelas/datatables', ['as' => 'kelas.datatables', 'middleware' => 'access:index,admin/kelas', 'uses' => 'KelasController@datatables']);
    Route::get('kelas/detail/{id}', ['as' => 'kelas.detail', 'middleware' => 'access:detail,admin/kelas', 'uses' => 'KelasController@detail']);
    Route::get('kelas/create', ['as' => 'kelas.create', 'middleware' => 'access:create,admin/kelas', 'uses' => 'KelasController@create']);
    Route::post('kelas/create', ['as' => 'kelas.store', 'middleware' => 'access:create,admin/kelas', 'uses' => 'KelasController@store']);
    Route::get('kelas/edit/{id}', ['as' => 'kelas.edit', 'middleware' => 'access:update,admin/kelas', 'uses' => 'KelasController@edit']);
    Route::put('kelas/edit/{id}', ['as' => 'kelas.update', 'middleware' => 'access:update,admin/kelas', 'uses' => 'KelasController@update']);
    Route::get('kelas/delete/{id}', ['as' => 'kelas.delete', 'middleware' => 'access:delete,admin/kelas', 'uses' => 'KelasController@delete']);
    Route::delete('kelas/delete/{id}', ['as' => 'kelas.destroy', 'middleware' => 'access:delete,admin/kelas', 'uses' => 'KelasController@destroy']);

    # StudentController
    Route::get('student', ['as' => 'student.index', 'middleware' => 'access:index,admin/student', 'uses' => 'StudentController@index']);
    Route::get('student/datatables', ['as' => 'student.datatables', 'middleware' => 'access:index,admin/student', 'uses' => 'StudentController@datatables']);
    Route::get('student/detail/{id}', ['as' => 'student.detail', 'middleware' => 'access:detail,admin/student', 'uses' => 'StudentController@detail']);
    Route::get('student/create', ['as' => 'student.create', 'middleware' => 'access:create,admin/student', 'uses' => 'StudentController@create']);
    Route::post('student/create', ['as' => 'student.store', 'middleware' => 'access:create,admin/student', 'uses' => 'StudentController@store']);
    Route::get('student/edit/{id}', ['as' => 'student.edit', 'middleware' => 'access:update,admin/student', 'uses' => 'StudentController@edit']);
    Route::put('student/edit/{id}', ['as' => 'student.update', 'middleware' => 'access:update,admin/student', 'uses' => 'StudentController@update']);
    Route::get('student/delete/{id}', ['as' => 'student.delete', 'middleware' => 'access:delete,admin/student', 'uses' => 'StudentController@delete']);
    Route::delete('student/delete/{id}', ['as' => 'student.destroy', 'middleware' => 'access:delete,admin/student', 'uses' => 'StudentController@destroy']);

});
