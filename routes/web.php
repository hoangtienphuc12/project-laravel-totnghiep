<?php

use App\RowSeat;
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

Route::get('/', function () {
    return view('customer.login');
});
Route::get('/login', function(){
    return view('customer.login');
});
Route::get('/register', function(){
    return view('customer.register');
});
Route::post('/login', 'Customer\AuthenticaController@checkLogin');
Route::get('/home', function () {
    return view('index');
});
Route::get('/logout','Customer\AuthenticaController@logout');
Route::post('/register', 'Customer\AuthenticaController@register');


Route::prefix('admin')->group(function () {
    Route::resource('tickets', "Resources\TicketController");
});
Route::get('/detail', function(){
    return view('detail-movie');
});
Route::get('/admin/index', 'Admin\AdminController@getMovieItems'
);
Route::get('admin/add-cate-movies', 'Admin\AdminController@getAddMovieCategories');
Route::post('admin/add-cate-movies', 'Admin\AdminController@postAddMovieCategories');
Route::post('/add-category', 'Admin\AdminController@checkCategories'
);
// Route::post('admin/add-movies','Admin\AdminController@postAddMovies'
// );
// Route::get('admin/add-movies','Admin\AdminController@getAddMovies'
// );
Route::post('admin/coming-soon','Admin\AdminController@postComingSoon'
);
Route::get('admin/coming-soon','Admin\AdminController@getComingSoon'
);
Route::get('admin/delete-category/{cate_id}','Admin\AdminController@getDeleteCate'
);
Route::get('admin/add-category','Admin\AdminController@getEdit'
);
Route::get('admin/delete-movie/{movie_id}','Admin\Controller@getDeleteMovie'     
);

//admin Room
Route::post('admin/room-show','Admin\AdminController@postRoomShow'
);
Route::get('admin/room-show','Admin\AdminController@getRoomShow'
);
Route::get('admin/delete-room/{room_id}','Admin\AdminController@getDeleteRoom'
);
//row-seat
Route::get('admin/row-seat','Admin\AdminController@getRowSeat'
);
Route::post('admin/row-seat','Admin\AdminController@postRowSeat'
);
Route::get('admin/delete-row/{row_id}','Admin\AdminController@getDeleteRow'
);
//row-seat
Route::get('admin/seat-number','Admin\AdminController@getSeatNumber'
);
Route::post('admin/seat-number','Admin\AdminController@postSeatNumber'
);
Route::get('admin/delete-seat/{seat_id}','Admin\AdminController@getDeleteSeat'
);
//show_time
Route::get('admin/show-time','Admin\AdminController@getShowTime'
);
Route::post('admin/show-time','Admin\AdminController@postShowTime'
);
Route::get('admin/delete-time/{id}','Admin\AdminController@getDeleteTime'
);
//combo
Route::get('admin/combo','Admin\Admincontroller@getCombo'
);
Route::post('admin/combo','Admin\AdminController@postCombo'
);
Route::get('admin/delete-combo{id}','Admin\AdminController@getDeletecombo');