<?php

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
    return view('Welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/bookEMODr', function () {
    return view('bookEMODr');
});

Route::get('/EMODrDetails', function () {
    return view('EMODrDetails');
});

Route::get('/bookSpecialist', function () {
    return view('bookSpecialist');
});

Route::get('/SpecialistDrDetails', function () {
    return view('SpecialistDrDetails');
});

Route::get('/appointmentDetails', function () {
    return view('appointmentDetails');
});
Route::get('/prescriptionDetails', function () {
    return view('prescriptionDetails');
});

Route::get('/reportDetails', function () {
    return view('reportDetails');
});

Route::get('/patientDetails', function () {
    return view('patientDetails');
});

Route::get('/generateMeetLink', function () {
    return view('generateMeetLink');
});

Route::get('/paymentDetails', function () {
    return view('paymentDetails');
});

Route::get('/mobileBankingPaymentDetails', function () {
    return view('mobileBankingPaymentDetails');
});

Route::get('/paymentHistory', function () {
    return view('paymentHistory');
});

Route::get('/makePayment', function () {
    return view('makePayment');
});

Route::get('/allDoctors','App\Http\Controllers\DoctorController@list');

require __DIR__.'/auth.php';
