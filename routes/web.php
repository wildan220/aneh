<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HRGABarangController;
use App\Http\Controllers\HRGAKategoriBarangController;
use App\Http\Controllers\HRGALokasiBarangController;
use App\Http\Controllers\HRGAMerkBarangController;
use App\Http\Controllers\HRGAPinjamBarangController;
use App\Http\Controllers\HRGAStatusBarangController;
use App\Http\Controllers\HRGAServisBarangController;
use App\Http\Controllers\HRGANonaktifBarangController;
use App\Http\Controllers\BarangRequestorController;
use App\Http\Controllers\BuktiPengembalianController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\LokasiBarangController;
use App\Http\Controllers\MerkBarangController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\HRGARuanganController;
use App\Http\Controllers\HRGAKategoriRuanganController;
use App\Http\Controllers\RuanganRequestorController;
use App\Http\Controllers\KategoriRuanganController;
use App\Http\Controllers\HRGAGedungController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\HRGADepartemenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatusBarangController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\PinjamRuanganController;
use App\Http\Controllers\HRGAPinjamRuanganController;
use App\Http\Controllers\ServisBarangController;
use App\Http\Controllers\NonaktifBarangController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/reg', [UserController::class, 'register'])->name('user.register');




// User

Route::get('/user', function () {
    return view('users.index');
});

Route::get('/jabatan', function () {
    return view('users.jabatan');
});

Route::get('/kelolausers', function () {
    return view('users.kelolausers');
});

Route::get('/adduser', function () {
    return view('users.add');
});

Route::get('/addjabatan', function () {
    return view('users.addjabatan');
});

Route::get('/editjabatan', function () {
    return view('users.editjabatan');
});

Route::get('/editusers', function () {
    return view('users.edit');
});



// Barang

// Route::get('/barang', function () {
//     return view('barangs.index');
// });

Route::get('/katbarang', function () {
    return view('barangs.kategoribarang');
});

Route::get('/statusbarang', function () {
    return view('barangs.statusbarang');
});

Route::get('/peminjamanbarang', function () {
    return view('barangs.peminjamanbarang');
});

Route::get('/servis', function () {
    return view('barangs.servis');
});

Route::get('/nonaktif', function () {
    return view('barangs.nonaktif');
});

Route::get('/requestorbarang', function () {
    return view('barangs.index_requestor');
});




Route::get('/buktipengembalian', function () {
    return view('barangs.uploadbuktipengembalian');
});

Route::get('/lihatbukti', function () {
    return view('barangs.lihatbuktipengembalian');
});

Route::resource('requestorbarang', BarangRequestorController::class);


//add
Route::get('/addbarang', function () {
    return view('barangs.addbarang');
});

Route::get('/addservis', function () {
    return view('barangs.addservis');
});

Route::get('/addnonaktif', function () {
    return view('barangs.addnonaktif');
});

Route::get('/addstatus', function () {
    return view('barangs.addstatus');
});

Route::get('/addkatbarang', function () {
    return view('barangs.addkatbarang');
});

//edit
Route::get('/editbarang', function () {
    return view('barangs.editbarang');
});

Route::get('/editservis', function () {
    return view('barangs.editservisbarang');
});

Route::get('/editnonaktif', function () {
    return view('barangs.editnonaktifbarang');
});

Route::get('/editstatus', function () {
    return view('barangs.editstatusbarang');
});

Route::get('/editkatbarang', function () {
    return view('barangs.editkatbarang');
});


// Ruangan
Route::get('/ruangan', function () {
    return view('ruangan.index');
});

Route::get('/katruangan', function () {
    return view('ruangan.kategoriruangan');
});

Route::get('/gedung', function () {
    return view('ruangan.gedung');
});

Route::get('/peminjamanruangan', function () {
    return view('ruangan.peminjamanruangan');
});

Route::get('/requestorruangan', function () {
    return view('ruangan.index_requestor');
});
Route::resource('requestorruangan', RuanganRequestorController::class);


//add
Route::get('/addruangan', function () {
    return view('ruangan.add');
});

Route::get('/addkatruangan', function () {
    return view('ruangan.addkatruangan');
});

Route::get('/addgedung', function () {
    return view('ruangan.addgedung');
});

//edit
Route::get('/editruangan', function () {
    return view('ruangan.edit');
});

Route::get('/editkatruangan', function () {
    return view('ruangan.editkatruangan');
});

Route::get('/editgedung', function () {
    return view('ruangan.editgedung');
});

// Departemen

Route::get('/departemen', function () {
    return view('departemen.index');
});

Route::get('/adddepartemen', function () {
    return view('departemen.add');
});

Route::get('/editdepartemen', function () {
    return view('departemen.edit');
});


// Tambahan untuk halaman requestor

// Route::get('/userpeminjamanbarang', function () {
//     return view('barangs.userpeminjamanbarang');
// });

// Route::get('/userpeminjamanruangan', function () {
//     return view('ruangan.userpeminjamanruangan');
// });

// Route::get('/statuspeminjamanbarang', function () {
//     return view('barangs.statuspeminjamanbarang');
// });

// Route::get('/statuspeminjamanruangan', function () {
//     return view('ruangan.statuspeminjamanruangan');
// });



//CRUD

//Halaman HRGA BARANG
Route::resource('hrgabarang', HRGABarangController::class);
Route::resource('hrgakategbarang', HRGAKategoriBarangController::class);
Route::resource('lokasibarang_hrga', HRGALokasiBarangController::class);
Route::resource('merkbarang_hrga', HRGAMerkBarangController::class);
Route::resource('statusbarang_hrga', HRGAStatusBarangController::class);
Route::resource('ajukanpinjambarang_hrga', HRGAPinjamBarangController::class);
Route::resource('statuspinjambarang_hrga', HRGAPinjamBarangController::class);
Route::get('peminjamanbaranghrga/approval',[HRGAPinjamBarangController::class,'index_approval']);
Route::resource('servis_hrga', HRGAServisBarangController::class);
Route::resource('nonaktif_hrga', HRGANonaktifBarangController::class);

//Halaman HRGA RUANGAN
Route::resource('ruangan_hrga', HRGARuanganController::class);
Route::resource('kategoriruangan_hrga', HRGAKategoriRuanganController::class);
Route::resource('gedung_hrga', HRGAGedungController::class);
Route::resource('departemen_hrga', HRGADepartemenController::class);
Route::resource('ajukanpinjamruangan_hrga', HRGAPinjamRuanganController::class);
Route::resource('statuspinjamruangan_hrga', HRGAPinjamRuanganController::class);
Route::get('peminjamanruangan_hrga/approval',[HRGAPinjamRuanganController::class,'index_approval']);


//barang

Route::resource('barang', BarangController::class);

Route::resource('kategoribarang', KategoriBarangController::class);
Route::resource('lokasibarang', LokasiBarangController::class);
Route::resource('merkbarang', MerkBarangController::class);
Route::resource('statusbarang', StatusBarangController::class);
Route::resource('servis', ServisBarangController::class);
Route::resource('nonaktif', NonaktifBarangController::class);


//requestor
Route::post('riwayatpinjambarang/return/{id}',[PinjamBarangController::class,'return'])->name('riwayatpinjambarang.return');
Route::resource('statuspinjambarang', PinjamBarangController::class);
Route::resource('ajukanpinjambarang', PinjamBarangController::class);

Route::post('statuspinjamruangan/return/{id}',[PinjamRuanganController::class,'return'])->name('statuspinjamruangan.return');
Route::resource('statuspinjamruangan', PinjamRuanganController::class);
Route::resource('ajukanpinjamruangan', PinjamRuanganController::class);


//approval barang
Route::get('peminjamanbarang/approval',[PinjamBarangController::class,'index_approval']);
Route::get('peminjamanbarang/pengembalian/{id}',[PinjamBarangController::class,'index_pengembalian']);
Route::get('riwayatpinjambarang/buktipengembalian_create/{id}',[PinjamBarangController::class,'buktipengembalian_create'])->name('riwayatpinjambarang.buktipengembalian_create');
Route::post('riwayatpinjambarang/buktipengembalian_store/{id}',[PinjamBarangController::class,'buktipengembalian_store'])->name('riwayatpinjambarang.buktipengembalian_store');
Route::get('peminjamanbarang/approve/{id}',[PinjamBarangController::class,'approve']);
Route::get('peminjamanbarang/rejected/{id}',[PinjamBarangController::class,'rejected']);
Route::resource('peminjamanbarang', PinjamBarangController::class);


//approval ruangan
Route::get('peminjamanruangan/approval',[PinjamRuanganController::class,'index_approval']);
Route::get('peminjamanruangan/approve/{id}',[PinjamRuanganController::class,'approve']);
Route::get('peminjamanruangan/rejected/{id}',[PinjamRuanganController::class,'rejected']);
Route::resource('peminjamanruangan', PinjamRuanganController::class);

//ruangan
Route::resource('ruangan', RuanganController::class);
Route::resource('kategoriruangan', KategoriRuanganController::class);
Route::resource('gedung', GedungController::class);

Route::resource('departemen', DepartemenController::class);

//user
Route::resource('user', UserController::class);
Route::resource('jabatanuser', JabatanController::class);
Route::resource('kelolausers', KelolaUserController::class);
Route::resource('userprofile', UserProfileController::class);


Auth::routes();



//Cetak Data
Route::get('/cetak_barang',[BarangController::class, 'cetak_barang'])->name('cetak_barang');
Route::get('/cetak_kategbarang',[KategoriBarangController::class, 'cetak_kategbarang'])->name('cetak_kategbarang');
Route::get('/cetak_lokasibarang',[LokasiBarangController::class, 'cetak_lokasibarang'])->name('cetak_lokasibarang');
Route::get('/cetak_merk',[MerkBarangController::class, 'cetak_merk'])->name('cetak_merk');
Route::get('/cetak_statusbarang',[StatusBarangController::class, 'cetak_statusbarang'])->name('cetak_statusbarang');
Route::get('/cetak_servisbarang',[ServisBarangController::class, 'cetak_servisbarang'])->name('cetak_servisbarang');
Route::get('/cetak_barangnonaktif',[NonaktifBarangController::class, 'cetak_barangnonaktif'])->name('cetak_barangnonaktif');
Route::get('/cetak_ruangan',[RuanganController::class, 'cetak_ruangan'])->name('cetak_ruangan');
Route::get('/cetak_kategruangan',[KategoriRuanganController::class, 'cetak_kategruangan'])->name('cetak_kategruangan');
Route::get('/cetak_gudang',[GedungController::class, 'cetak_gudang'])->name('cetak_gudang');
Route::get('/cetak_departemen',[DepartemenController::class, 'cetak_departemen'])->name('cetak_departemen');
Route::get('/cetak_daftaruser',[UserController::class, 'cetak_daftaruser'])->name('cetak_daftaruser');
Route::get('/cetak_jabatan',[JabatanController::class, 'cetak_jabatan'])->name('cetak_jabatan');
Route::get('/cetak_barangrequestor',[BarangRequestorController::class, 'cetak_barangrequestor'])->name('cetak_barangrequestor');
Route::get('/cetak_ruanganrequestor',[RuanganRequestorController::class, 'cetak_ruanganrequestor'])->name('cetak_ruanganrequestor');
Route::get('/cetak_pinjambarang',[PinjamBarangController::class, 'cetak_pinjambarang'])->name('cetak_pinjambarang');
Route::get('/cetak_pinjamruangan',[PinjamRuanganController::class, 'cetak_pinjamruangan'])->name('cetak_pinjamruangan');
Route::get('/cetak_riwayatpinjambarang',[PinjamBarangController::class, 'cetak_riwayatpinjambarang'])->name('cetak_riwayatpinjambarang');
Route::get('/cetak_buktipengembalianbarang/buktipengembalian/{id}',[PinjamBarangController::class, 'cetak_buktipengembalianbarang'])->name('buktipengembalianbarang');
Route::get('/cetak_riwayatpinjamruangan',[PinjamRuanganController::class, 'cetak_riwayatpinjamruangan'])->name('cetak_riwayatpinjamruangan');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
