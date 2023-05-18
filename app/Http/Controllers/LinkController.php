<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    
    //Student Links
    public function StudentDashboard(){
        return view('student.index');
    }

    public function CreateRequest(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('student.internship_form', ['userName' => $userName]);
    }


    public function NoteStudent(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('student.note_student', ['userName' => $userName]);
    }

    public function NoteDetailsStudent(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('student.notation_details', ['userName' => $userName]);
    }

    public function UploadReport(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);

        return view('student.upload_report', ['userName' => $userName]);
    }
    public function StudentRequestList()
    {
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);

        return view('student.request_list', ['userName' => $userName]);
        
    }

    public function UpdateRequest(){

        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('student.update_request', ['userName' => $userName]);
    }

    public function StudentProfile(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('student.users-profile', ['userName' => $userName]);
    }

    public function StudentContact(){$userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('student.pages-contact', ['userName' => $userName]);
    }

    //Supervisor Links
    public function SupervisorDashboard(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.internship_supervisor', ['userName' => $userName]);
    }

    public function NotationSupervisor(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.notation_form', ['userName' => $userName]);
    }

    public function ReportListSupervisor(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.report_list', ['userName' => $userName]);
    }
    public function RequestListSupervisor()
    {
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.request_list_maitre', ['userName' => $userName]);
        
    }

    public function ManageAbsences(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.absences_maitre', ['userName' => $userName]);
    }

    public function RequestDetailsSupervisor(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.request_details_maitre', ['userName' => $userName]);
    }

    public function ManageTrainees(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.trainee_list', ['userName' => $userName]);
    } 

    public function SupervisorProfile(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.users-profile', ['userName' => $userName]);
    }

    public function SupervisorContact(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('supervisor.pages-contact', ['userName' => $userName]);
    }

    
    //HeadOfDepartment Links
    public function HeadOfDepartmentDashboard(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.head_of_department', ['userName' => $userName]); 
    }

    public function NotationHead(){$userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.note_chef', ['userName' => $userName]);
    }

    public function NotationDetailsHead(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.notation_details', ['userName' => $userName]);
    }

    public function RequestListHead(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.request_list_chef', ['userName' => $userName]);
    }

    public function RequestDetailsHead(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.request_details', ['userName' => $userName]);
    }

    public function ContactHead(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.pages-contact', ['userName' => $userName]);
    }

    public function HeadProfile(){
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
        ->where('id', $userId)
        ->where('userType', $userType)
        ->select('first_name','last_name')
        ->first();
        
        $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
        return view('head.users-profile', ['userName' => $userName]);
    }

    

}
