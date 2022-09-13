<?php
use \Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::prefix('greeting')->group(function () {//prefix là thêm đường dẫn lót
//     //Đường dẫn
//     // Route::get('great', [\App\Http\Controllers\Controller::class, 'greet']);
//     Route::get('great', [Controller::class, 'greet']);
//     //Đường dẫ gán id
//     Route::get('user/{id}', function ($id) {
//         return "User id: $id";
//     });
//     //Đường dẫn nhiều id
//     Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
//         return "User id: $id and comment id: $commentId";
//     });
//     //Đường dẫn có điều kiện
//     Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
//         return "User id: $id and comment id: $commentId";
//     })->where('id', '[0-9]+')->where('commentId', '[0-9]+');
//     //Đường dẫn có điều kiện với mảng
//     Route::get('admin/{id}/comment/{commentId}', function ($id, $commentId) {
//         return "Khai báo mảng:Admin id: $id and comment id: $commentId";
//     })->where(['id' => '[0-9]+', 'commentId' => '[0-9]+']);
// });
// Route::prefix('user')->name('user.')->group(function () {
//     Route::get('profile', function () {
//         return "Khai";
//     })->name('profile');

//     Route::get('setting', function () {
//         //
//     })->name('setting');
// });


//View
// Route::get('/', function () {
//     return view('home');
// })->name('home');
Route::get('/', function () {
    if (View::exists('home')) {
        return view('home', ['title' => 'toidicode.com', 'body' => 'Body','name' => "<span style='color: red'>Lò Thị Vi Sóng</span>"]);
    }else{
        return "Không tồn tại"; 
    }
})->name('home');
// Route::get('/', function () {
//     return view('home', ['name' => "Lò Thị Vi Sóng"]);
// })->name('home');
// Nếu trong trường hợp view của bạn nằm trong một thư mục con trong resources/views thì bạn có thể sử dụng dấu . để đại diện cho kí tự /.
// Route::get('/', function () {
//     return view('home.index', ['title' => 'toidicode.com', 'body' => 'Body']);
// })->name('home');