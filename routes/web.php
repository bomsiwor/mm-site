<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
    $data = [
        'title' => "Mahkamah Mahasiswa Portal"
    ];
    return view('index', $data);
});

// Authentication
Route::get('/auth', [AuthController::class, 'index'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/prohuk', function () {
    $data = [
        'title' => "MM-Portal Dokumen Publik"
    ];
    return view('public-page.doc-jud', $data);
});




// Rute untuk mengupload
Route::post('/upload', function (Request $request) {
    // $filename = 'logo-mm.png';
    // $filePath = public_path($filename);

    // // Storage::cloud()->put($filename, fopen($filePath, 'r+'));

    // Storage::disk('google')->put($filename, fopen($filePath, 'r+'));
    // return response()->json(['success' => true]);
    $file = $request->file("thing");
    $filename = $file->getClientOriginalName();
    // dd($request->file("thing")->store("", "google"));
    // dd($filename);
    // Storage::disk("google")->put($file, $filename);
    Storage::disk("google")->putFileAs("", $file, $filename);
    return "File $filename sudah diupload";
})->name("upload");

// Rute untuk mendapatkan nama file
Route::get('list', function () {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

    $data = $contents->where('type', '=', 'file');

    //return $contents->where('type', '=', 'dir'); // directories
    dd($data[0]['name']);  // files
});

Route::get('dolod', function () {
    $filename = 'fingerprint_scanner_arduino_banner.jpg';

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info

    $rawData = Storage::disk('google')->get($file['path']);

    return response($rawData, 200)
        ->header('ContentType', $file['mimetype'])
        ->header('Content-Disposition', "attachment; filename=$filename");
});

Route::get('create-dir', function () {
    Storage::disk('google')->makeDirectory('Test Dir');
    return 'Directory was created in Google Drive';
});

Route::get('put', function () {
    Storage::disk('google')->put('test.txt', 'Hello World');
    return 'File was saved to Google Drive';
});

Route::get('rename', function () {
    $filename = 'namabaru.jpg';

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info
    $ext = $file['extension'];

    // $rawData = Storage::disk('google')->get($file['path']);
    $namenew = 'namabaru2';
    Storage::disk('google')->rename($file['path'], $namenew . $ext);
    return 'File dirubah namanya';
});
