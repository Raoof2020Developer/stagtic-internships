<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Company;
use App\Models\HeadOfDepartment;
use App\Models\Internship;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function index() {
        $certificates = Certificate::all();
        return view('supervisor.certificates.index', compact('certificates'));
    }
    
    public function create() {
        $students = Student::all();
        $internships = Internship::all();
        $heads_of_departments = HeadOfDepartment::all();
        $internship_supervisor_id = DB::table('internship_supervisor')->where('email_internship_supervisor', auth()->user()->email)->first()->id_internship_supervisor;
        return view('supervisor.certificates.create', compact('students', 'internships', 'heads_of_departments', 'internship_supervisor_id'));
    }

    public function store(Request $request) {
        $certificate = Certificate::create([
            'id_student' => $request['id_student'],
            'id_internship' => $request['id_internship'],
            'id_head_of_department' => $request['id_head_of_department'],
            'id_internship_supervisor' => $request['id_internship_supervisor'],
            'certificate_key' => $request['certificate_key']
        ]);
        
        return redirect('supervisor/certificates');
    }

    public function show($certificateKey) {
        $certificate = Certificate::where('certificate_key', $certificateKey)->first();
        $internship = Internship::find($certificate->id_internship);
        $supervisor = Supervisor::find($certificate->id_internship_supervisor);
        $company = Company::find($internship->id_company);
        return view('supervisor.certificates.show', compact('certificate', 'internship', 'supervisor', 'company'));
    }

    public function delete($certificateKey) {
        $certificate = Certificate::where('certificate_key', $certificateKey)->first();
        DB::table('certificate')->delete($certificate->id);
        return redirect(route('certificates.index'));
    }
}
