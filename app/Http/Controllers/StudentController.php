<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
 
    public function store(Request $request){

        $student = new Student();
        
       $student-> security_number = $request->input('security_number');
       $student-> card_number = $request->input('card_number');
       $student-> date_of_birth = $request->input('date_of_birth');
       $student-> speciality = $request->input('speciality');
       $student-> level = $request->input('level');
       $student-> semester = $request->input('semester');
       $student-> college_year = $request->input('college_year');
       $student-> first_name_student = $request->input('first_name_student');
       $student-> last_name_student = $request->input('last_name_student');
       $student-> phone_student = $request->input('phone_student');
       $student-> email_student = $request->input('email_student');

        $student ->save();

        return redirect()->back()->with('success');
   
    }
   
    
    public function StudentDashboard()
    {
        
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;

        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name','last_name')
            ->first();

            $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);

        return view('student.index', ['userName' => $userName]);
    }

    
    public function edit()
    {
        $userId = auth()->user()->id;
        $userType = auth()->user()->userType;
    
        $user = DB::table('users')
            ->where('id', $userId)
            ->where('userType', $userType)
            ->select('first_name', 'last_name')
            ->first();
    
        $userName = strtoupper($user->first_name) . ' ' . strtoupper($user->last_name);
    
        $companies = Company::all();
    
        if ($userType == 'student') {
            $student = Student::where('id_user', $userId)->first();
    
            return view('student.internship_form', ['student' => $student, 'userName' => $userName ,'companies' => $companies]);
        }
    
        // if user is not a student, redirect to appropriate page
    }
    
    
    public function update()
{
    $userId = auth()->user()->id;
    $userType = auth()->user()->userType;

    if ($userType == 'student') {
        $student = Student::where('id_user', $userId)->first();
        $student->fill(request()->all());
        $student->save();

        return redirect()->back()->with('success');
    }

    // if user is not a student, redirect to appropriate page
}
    
    


    public function delete($id)
    {
        $student = Student::find($id);
        
        if ($student) {
            $student->delete();
            return redirect()->back()->with('success', 'Student deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Student not found.');
        }
    }

   
    public function showChangePasswordForm()
    {
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

    public function changeStudentPassword(Request $request)
    {
    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'The current password does not match our records.']);
    }

    $this->validate($request, [
        'current_password' => 'required',
        'password' => 'required|string|min:6|different:current_password',
        'confirmpassword' => 'required|same:password',
    ]);

    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->back()->with('status', 'Password changed successfully.');
    }


    public function updateProfile(Request $request)
    {
    $user = Auth::user(); // get the authenticated user

    // update the user's first_name and last_name fields
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->save();
    $student = $user->student;
    $student->first_name_student = $request->input('first_name');
    $student->last_name_student = $request->input('last_name');
    $student->save();

    return redirect()->back()->with('success');
    }
}
