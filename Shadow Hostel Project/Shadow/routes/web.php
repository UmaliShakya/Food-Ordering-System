<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\roomcontroller;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/emp', function () {
    return view('employee');
});

Route::get('/studentM', function () {
    $data=App\Models\student::all();
    return view('studentM')->with('students', $data);
});

Route::post('/saveStudent', [studentcontroller::class,'storeStudent']);
Route::get('/studentD/view/{id}', [studentcontroller::class,'viewstudent']); 

Route::get('/editStudent/{id}', [studentcontroller::class,'editstudent']);   
Route::post('/editStudent/updateStudent/{id}', [studentcontroller::class,'updatestudent']);

Route::get('/employeeM', function () {
    $data=App\Models\employee::all();
    return view('employeeM')->with('employees', $data);
});

Route::post('/saveEmployee', [employeecontroller::class,'storeEmployee']);
Route::get('/employeeD/view/{id}', [employeecontroller::class,'viewemployee']); 
Route::get('/editemployee/{id}', [employeecontroller::class,'editemployee']);   
Route::post('/editemployee/updateemployee/{id}', [employeecontroller::class,'updateemployee']);

Route::get('/roomM', function () {
    $data=App\Models\Room::all();
    return view('roomM')->with('rooms', $data);
});

Route::post('/saveRoom', [roomcontroller::class,'storeRoom']);
Route::get('/editroom/{id}', [roomcontroller::class,'editroom']);   
Route::post('/editroom/updateroom/{id}', [roomcontroller::class,'updateroom']);