<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('test');
// });

// Route::view('/about-us', 'about')->name('page.about');
// Route::get('/users', function () {
//     return "LIST USER";
// });
// //Đường dẫn có tham số
// Route::get('/user/{id}', function (int $id) {
//     return "User ID: $id";
// });
// Route::get(
//     '/user/{id}/comment/{comment_id}',
//     function ($id, $comment_id) {
//         return "User ID: $id - Comment ID: $comment_id";
//     }
// )->where('id', '[0-9]+');

// //Nhóm đường dẫn theo tiền tố
// Route::prefix('admin')->group(function () {
//     Route::get('/product', function () {
//         return "PRODUCT";
//     });
//     Route::get('/users', function () {
//         return "USERS";
//     });
// });
Route::get('/', function () {
    $topPricedBooks = DB::table('books')
        ->select('*')
        ->orderBy('price', 'desc')
        ->limit(8)
        ->get();

    $lowestPricedBooks = DB::table('books')
        ->select('*')
        ->orderBy('price', 'asc')
        ->limit(8)
        ->get();

        $categories = DB::table('categories')
        ->get();

    return view('homepage', compact('topPricedBooks', 'lowestPricedBooks','categories'));
});
Route::get('/book/{id}', function ($id) {
    $book = DB::table('books')
        ->where('id', $id)
        ->first();

    return view('book_details', compact('book'));
});

Route::get('/books/{category_id}', function ($id) {
    $categories = DB::table('categories')->get();
    $booksCategory = DB::table('books')
        ->where('category_id','=', $id)
        ->get();
     
    return view('bookscategory', compact('booksCategory', 'categories'));
})->name('books.detail');


//Viết Query buider
// Route::get('/posts', function(){
    //Lấy dữ liệu
    //$posts = DB::table('posts')->get();

    //Lấy 10 bảng ghi
    // $posts = DB::table('table')
    // ->select('id','title','view')//Lấy các cột id, title, view
    // ->limit(10)->get();

    //Delete data
    // DB::table('posts')->delete(8);

    //Lấy ra các bài viết có lượt view > 800
    // $posts = DB::table('posts')
    // ->where('view','>',800)
    // ->get();

    // Nối 2 bảng posts và categories
    // $posts = DB::table('posts')
    // ->join('categories' , 'cate_id', '=', 'categories.id')
    // ->get();
    // return view('post-list', compact('posts'));
// });

// Route::prefix('category')->group(function(){
//     Route::get('/list',[CategoryController::class,'index'])->name('category,index');
// });

// Route::get('/', [BookController::class,'index'])->name('book.index');
// Route::get('/create', [BookController::class,'create'])->name('book.create');
// Route::get('/create', [BookController::class,'store'])->name('book.store');
// Route::get('/edit/{id}', [BookController::class,'edit'])->name('book.edit');
// Route::get('/edit/{id}', [BookController::class,'update'])->name('book.update');
// Route::get('/delete/{id}', [BookController::class,'destroy'])->name('book.destroy');