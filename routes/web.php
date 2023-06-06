<?php

use App\Http\Controllers\Client\ChatController as ClientChatController;
use App\Http\Controllers\Client\DoctorController as ClientDoctorController;
use App\Http\Controllers\Client\FollowupController as ClientFollowupController;
use App\Http\Controllers\Client\HospitalController as ClientHospitalController;
use App\Http\Controllers\Client\PatientController as ClientPatientController;
use App\Http\Controllers\Client\PharmacyController as ClientPharmacyController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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



Route::group(['prefix' => 'admin'], function () {
    Auth::routes();

    Route::middleware(['auth'])->group(function () {
        Route::get('', function () {
            return view('layouts.admin');
        });

        Route::get('patients', [PatientController::class, 'index'])->name('patient.index');
        Route::get('patients/create', [PatientController::class, 'create'])->name('patient.create');
        Route::get('patients/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');
        Route::post('patients/store', [PatientController::class, 'store'])->name('patient.store');
        Route::put('patients/{id}/update', [PatientController::class, 'update'])->name('patient.update');
        Route::delete('patients/{id}/delete', [PatientController::class, 'destroy'])->name('patient.delete');
        Route::get('doctors', [DoctorController::class, 'index'])->name('doctor.index');
        Route::get('doctors/create', [DoctorController::class, 'create'])->name('doctor.create');
        Route::get('doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
        Route::post('doctors/store', [DoctorController::class, 'store'])->name('doctor.store');
        Route::put('doctors/{id}/update', [DoctorController::class, 'update'])->name('doctor.update');
        Route::delete('doctors/{id}/delete', [DoctorController::class, 'destroy'])->name('doctor.delete');
        Route::get('pharmacies', [PharmacyController::class, 'index'])->name('pharmacy.index');
        Route::get('pharmacies/create', [PharmacyController::class, 'create'])->name('pharmacy.create');
        Route::get('pharmacies/{id}/edit', [PharmacyController::class, 'edit'])->name('pharmacy.edit');
        Route::post('pharmacies/store', [PharmacyController::class, 'store'])->name('pharmacy.store');
        Route::put('pharmacies/{id}/update', [PharmacyController::class, 'update'])->name('pharmacy.update');
        Route::delete('pharmacies/{id}/delete', [PharmacyController::class, 'destroy'])->name('pharmacy.delete');
        Route::get('hospitals', [HospitalController::class, 'index'])->name('hospital.index');
        Route::get('hospitals/create', [HospitalController::class, 'create'])->name('hospital.create');
        Route::get('hospitals/{id}/edit', [HospitalController::class, 'edit'])->name('hospital.edit');
        Route::post('hospitals/store', [HospitalController::class, 'store'])->name('hospital.store');
        Route::put('hospitals/{id}/update', [HospitalController::class, 'update'])->name('hospital.update');
        Route::delete('hospitals/{id}/delete', [HospitalController::class, 'destroy'])->name('hospital.delete');
        Route::get('followups', [FollowupController::class, 'index'])->name('followup.index');
        Route::get('followups/{id}/edit', [FollowupController::class, 'edit'])->name('followup.edit');
        Route::put('followups/{id}/update', [FollowupController::class, 'update'])->name('followup.update');
        Route::delete('followups/{id}/delete', [FollowupController::class, 'destroy'])->name('followup.delete');
        Route::get('chats', [ChatController::class, 'index'])->name('chat.index');
        Route::get('chats/create', [ChatController::class, 'create'])->name('chat.create');
        Route::get('chats/{id}/edit', [ChatController::class, 'edit'])->name('chat.edit');
        Route::post('chats/store', [ChatController::class, 'store'])->name('chat.store');
        Route::put('chats/{id}/update', [ChatController::class, 'update'])->name('chat.update');
        Route::delete('chats/{id}/delete', [ChatController::class, 'destroy'])->name('chat.delete');


        Route::get('files/{id}/{filename}', function ($id,$filename) {

            return Storage::download('uploads/' .$id.'/'. $filename);
        })->name('files');
    });
});


Route::get('/', function () {
    return view('home');
});



Route::get('patients/create', [ClientPatientController::class, 'create'])->name('client.patient.create');
Route::get('patients/login', [ClientPatientController::class, 'login'])->name('client.patient.login');
Route::post('patients/login', [ClientPatientController::class, 'signin'])->name('client.patient.signin');
Route::post('patients/logout', [ClientPatientController::class, 'logout'])->name('client.patient.logout');
Route::get('patients/edit', [ClientPatientController::class, 'edit'])->name('client.patient.edit');
Route::post('patients/store', [ClientPatientController::class, 'store'])->name('client.patient.store');
Route::put('patients/update', [ClientPatientController::class, 'update'])->name('client.patient.update');

Route::get('doctors', [ClientDoctorController::class, 'index'])->name('client.doctor.index');
Route::get('doctors/login', [ClientDoctorController::class, 'login'])->name('client.doctor.login');
Route::post('doctors/login', [ClientDoctorController::class, 'signin'])->name('client.doctor.signin');
Route::post('doctors/logout', [ClientDoctorController::class, 'logout'])->name('client.doctor.logout');
Route::get('doctors/create', [ClientDoctorController::class, 'create'])->name('client.doctor.create');
Route::get('doctors/edit', [ClientDoctorController::class, 'edit'])->name('client.doctor.edit');
Route::post('doctors/store', [ClientDoctorController::class, 'store'])->name('client.doctor.store');
Route::put('doctors/update', [ClientDoctorController::class, 'update'])->name('client.doctor.update');

Route::get('pharmacies', [ClientPharmacyController::class, 'index'])->name('client.pharmacy.index');
Route::get('pharmacies/login', [ClientPharmacyController::class, 'login'])->name('client.pharmacy.login');
Route::post('pharmacies/login', [ClientPharmacyController::class, 'signin'])->name('client.pharmacy.signin');
Route::post('pharmacies/logout', [ClientPharmacyController::class, 'logout'])->name('client.pharmacy.logout');
Route::get('pharmacies/create', [ClientPharmacyController::class, 'create'])->name('client.pharmacy.create');
Route::get('pharmacies/edit', [ClientPharmacyController::class, 'edit'])->name('client.pharmacy.edit');
Route::post('pharmacies/store', [ClientPharmacyController::class, 'store'])->name('client.pharmacy.store');
Route::put('pharmacies/update', [ClientPharmacyController::class, 'update'])->name('client.pharmacy.update');

Route::get('hospitals', [ClientHospitalController::class, 'index'])->name('client.hospital.index');
Route::get('hospitals/login', [ClientHospitalController::class, 'login'])->name('client.hospital.login');
Route::post('hospitals/login', [ClientHospitalController::class, 'signin'])->name('client.hospital.signin');
Route::post('hospitals/logout', [ClientHospitalController::class, 'logout'])->name('client.hospital.logout');
Route::get('hospitals/create', [ClientHospitalController::class, 'create'])->name('client.hospital.create');
Route::get('hospitals/edit', [ClientHospitalController::class, 'edit'])->name('client.hospital.edit');
Route::post('hospitals/store', [ClientHospitalController::class, 'store'])->name('client.hospital.store');
Route::put('hospitals/update', [ClientHospitalController::class, 'update'])->name('client.hospital.update');

Route::get('followups', [ClientFollowupController::class, 'index'])->name('client.followup.index');
Route::post('followups/store', [ClientFollowupController::class, 'store'])->name('client.followup.store');
Route::get('chat', [ClientChatController::class, 'index'])->name('client.chat.index');
