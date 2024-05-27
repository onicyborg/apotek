<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/obat', [ProductController::class, 'index'])->name('obat.index');
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('home');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/produk', [ProductController::class, 'display']);

Route::get('/saran-dan-kritik', [CommentsController::class, 'index']);
Route::post('/post-comment', [CommentsController::class, 'store']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index_admin']);

    Route::get('/dashboard/data-obat', [ProductController::class, 'index']);
    Route::post('/add-data-obat', [ProductController::class, 'store']);
    Route::put('/update-data-obat/{id}', [ProductController::class, 'update']);
    Route::delete('/delete-data-obat/{id}', [ProductController::class, 'destroy']);

    Route::get('/dashboard/manajemen-user', [UsersController::class, 'index']);
    Route::post('/add-user', [UsersController::class, 'store']);
    Route::put('/update-user/{id}', [UsersController::class, 'update']);
    Route::delete('/delete-user/{id}', [UsersController::class, 'destroy']);

    Route::get('/dashboard/laporan', function () {
        return view('dashboard.laporan');
    });
});

Route::group(['middleware' => 'role:kasir'], function () {
    Route::get('/kasir', [DashboardController::class, 'index']);

    Route::get('/kasir/pembelian', [ProductController::class, 'index_pembelian']);
    Route::post('/submit-purchase', [ProductController::class, 'pembelian']);

    Route::get('/kasir/transaksi', [HistoryController::class, 'index']);
    Route::post('/kasir/filter-history', [HistoryController::class, 'filter']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->intended('/');
    })->name('logout');
});

// Route::get('/tentang', function () {
//     return view('tentang');
// });
// Route::get('/produk', function () {
//     return view('produk');
// });
// Route::get('/saran-dan-kritik', function () {
//     return view('saran_dan_kritik');
// });

// Route::prefix('/dashboard')->group(function () {
//     route::get('login', function () {
//         return view('dashboard.login');
//     });

//     route::get('', function () {
//         return view('dashboard.index');
//     });
//     route::get('data-obat', function () {
//         return view('dashboard.data-obat');
//     });
//     route::get('data-obat-masuk', function () {
//         return view('dashboard.data-obat-masuk');
//     });
//     route::get('input-obat-masuk', function () {
//         return view('dashboard.input-obat-masuk');
//     });
//     // Route::post('store-obat', [ProductController::class, 'store'])->name('store-obat');
//     route::get('laporan', function () {
//         return view('dashboard.laporan');
//     });
//     route::get('manajemen-user', function () {
//         return view('dashboard.manajemen-user');
//     });
// });

// Route::prefix('/kasir')->group(function () {
//     Route::get('/login', function () {
//         return view('kasir.login');
//     });
//     Route::get('/', function () {
//         return view('kasir.index');
//     });
//     Route::get('/pembelian', function () {
//         return view('kasir.pembelian');
//     });
//     Route::get('/transaksi', function () {
//         return view('kasir.transaksi');
//     });
//     Route::get('/pembayaran', function () {
//         return view('kasir.pembayaran');
//     });
// }
// );
