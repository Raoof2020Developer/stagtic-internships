<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Student;
use App\Models\User;
use App\Models\Supervisor;
use App\Models\Internship;
use App\Models\Company;
use App\Models\InternshipRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Notifications\RequestNotification;
use Illuminate\Support\Facades\Notification;

class RequestController extends Controller
{
    public function createRequest(Request $request){

        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;
    
        if ($userType == 'student') {
            $student = Student::where('id_user', $userId)->first();
            $student->fill(request()->all());
            $student->save();
        }
    

        $supervisor = new Supervisor();
        $supervisor-> first_name_internship_supervisor = $request->input('first_name_internship_supervisor');
        $supervisor-> last_name_internship_supervisor = $request->input('last_name_internship_supervisor');
        $supervisor-> email_internship_supervisor = $request->input('email_internship_supervisor');
        $supervisor-> phone_internship_supervisor = $request->input('phone_internship_supervisor');
        $supervisor->save();
    
        $company = new Company();
        $company-> name_company = $request->input('name_company');
        $company-> adresse = $request->input('adresse');
        $company-> 	phone_number = $request->input('phone_number');
        $company-> 	email = $request->input('email');
        $company->save();
    
        
        $internship = new Internship();
        $internship->id_student = $student->id_student;
        $internship->id_company = $company->id_company;
        $internship->id_internship_supervisor = $supervisor->id_internship_supervisor;
        $startDate = $request->input('start_date', date('Y-m-d'));
        $endDate = $request->input('end_date', date('Y-m-d'));
        $internship->start_date = $startDate;
        $internship->end_date = $endDate;
        $internship->internship_theme= $request->input('internship_theme');
        $internship->workplan = $request->input('workplan');
        $internship->period = date_diff(new DateTime($startDate), new DateTime($endDate))->format('%a');
        $internship->save();


        $request = new InternshipRequest();
        $request->id_student = $student->id_student;
        $request->date_request = now();
        $request->state_request;
        $request->state_request_head;
        $request->state_request_supervisor;
        $request->id_internship_supervisor = $supervisor->id_internship_supervisor;
        $request->id_company = $company->id_company;
        $request->id_internship = $internship->id_internship;
        $request->save();

       // Send notification to head of department
        $headOfDepartment = User::where('userType', 'head_of_department')->first();
        Notification::send($headOfDepartment, new RequestNotification($request));

    
    
        return redirect()->back()->with('success');
    }



    public function StudentRequestList()
{ 
    $requests = InternshipRequest::with(['internship', 'company'])->get();
    $userId = auth()->user()->id;
    $userType = auth()->user()->userType;

    $user = DB::table('users')
        ->where('id', $userId)
        ->where('userType', $userType)
        ->select('first_name','last_name')
        ->first();

    $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);

    return view('student.request_list', ['userName' => $userName, 'requests' => $requests]);
}
}
