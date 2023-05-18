<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LinkController;

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
    return view('welcome-page');
});



//Login Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('LoginForm', 'showLoginForm')->name('showLoginForm');
    Route::post('login', 'login')->name('login');
    Route::get('RegistrationForm','showRegistrationForm')->name('showRegistrationForm');
    Route::post('register','register')->name('register');
    Route::get('logout', 'logout')->name('logout');
    Route::get('redirectToWelcome','redirectToWelcome')->name('redirectToWelcome');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('Student/Dashboard', 'StudentDashboard')->name('StudentDashboard');
    Route::post('Store/Student', 'store')->name('storeStudent');
    Route::get('Update/Student', 'edit')->name('EditStudent');
    
    Route::get('Student/Profile','showChangePasswordForm')->name('StudentProfile');
    Route::post('Student/changePassword','changeStudentPassword')->name('changeStudentPassword');

    Route::post('Student/Profile','updateProfile')->name('updateStudentProfile');
   
});



Route::controller(HeadController::class)->group(function () {
    Route::get('HeadOfDepartment/Dashboard', 'HeadOfDepartmentDashboard')->name('HeadOfDepartmentDashboard');

    Route::get('HeadOfDepartment/Profile', 'showChangePasswordForm')->name('HeadProfile');
    Route::post('changePassword','changePassword')->name('changeHeadPassword');

    Route::post('Head/Profile','updateProfile')->name('updateHeadProfile');

    Route::get('HeadOfDepartment/RequestList', 'HeadRequestList')->name('RequestListHead');
});
   

Route::controller(SupervisorController::class)->group(function () {
    Route::get('Supervisor/Dashboard', 'SupervisorDashboard')->name('SupervisorDashboard');

    Route::get('Supervisor/Profile', 'showChangePasswordForm')->name('SupervisorProfile');
    Route::post('changePassword','changeSuperPassword')->name('changeSuperPassword');

    Route::post('Supervisor/Profile','updateSuperProfile')->name('updateSuperProfile');
   
});

Route::controller(RequestController::class)->group(function () {
    Route::get('Student/RequestList', 'StudentRequestList')->name('StudentRequestList');
    Route::post('StoreRequest', 'createRequest')->name('CreateRequest');
});



//Links
Route::controller(LinkController::class)->group(function () {
    
    //Student Links
    //Route::get('Student/NewRequest', 'CreateRequest')->name('CreateRequest');
    Route::get('Student/Note', 'NoteStudent')->name('NoteStudent');
    Route::get('Student/Note/Details', 'NoteDetailsStudent')->name('NoteDetailsStudent');
    Route::get('Student/UploadReport', 'UploadReport')->name('UploadReport');
    //Route::get('Student/Rrequest/Update', 'UpdateRequest')->name('UpdateRequest');
    //Route::get('Student/Profile', 'StudentProfile')->name('StudentProfile');
    Route::get('Student/Contact', 'StudentContact')->name('StudentContact');
    //Route::get('Student/RequestList', 'StudentRequestList')->name('StudentRequestList');
   


    //Supervisor Links
    Route::get('Superisor/Notation', 'NotationSupervisor')->name('NotationSupervisor');
    Route::get('Supervisor/ReportList', 'ReportListSupervisor')->name('ReportListSupervisor');
    Route::get('Supervisor/ManageAbsences', 'ManageAbsences')->name('ManageAbsences');
    Route::get('Supervisor/RequestDetails', 'RequestDetailsSupervisor')->name('RequestDetailsSupervisor');
    Route::get('Supervisor/ManageTrainees', 'ManageTrainees')->name('ManageTrainees');
    Route::get('Supervisor/RequestList', 'RequestListSupervisor')->name('SupervisorRequestList');
    Route::get('Supervisor/Profile', 'SupervisorProfile')->name('SupervisorProfile');
    Route::get('Supervisor/Contact', 'SupervisorContact')->name('SupervisorContact');
    Route::get('/supervisor/certificates', [CertificateController::class, 'index'])->name('certificates.index');
    Route::get('/supervisor/certificates/create', [CertificateController::class, 'create'])->name('certificates.create');
    Route::post('/supervisor/certificates/store', [CertificateController::class, 'store'])->name('certificates.store');
    Route::get('/supervisor/certificates/{certificateKey}', [CertificateController::class, 'show'])->name('certificates.show');
    Route::delete('/supervisor/certificates/{certificateKey}/delete', [CertificateController::class, 'delete'])->name('certificates.delete');

   

    //HeadOfDepartment Links
    Route::get('HeadOfDepartment/Notation', 'NotationHead')->name('NotationHead');
    Route::get('HeadOfDepartment/Notation/Details', 'NotationDetailsHead')->name('NotationDetailsHead');
    //Route::get('HeadOfDepartment/RequestList', 'RequestListHead')->name('RequestListHead');
    Route::get('HeadOfDepartment/Request/Details', 'RequestDetailsHead')->name('RequestDetailsHead');
    Route::get('HeadOfDepartment/Contact', 'ContactHead')->name('ContactHead');
    
    
});





