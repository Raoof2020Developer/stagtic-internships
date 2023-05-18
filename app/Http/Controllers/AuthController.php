<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages-register');
    }

    
    public function register(Request $request)
    {
    // Validate input
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|string|min:6',
        'confirmpassword' => 'required|same:password',
        'userType' => 'required|string',
        'security_number' => 'required|string',
        'card_number' => 'required|string',
        'date_of_birth' => 'required|date',
        'speciality' => 'required|string',
        'level' => 'required',
        'semester' => 'required|string',
        'college_year' => 'required|string',
        'phone_student' => 'required|string',
        'name_department' => 'required',
        
    ]);

    $department = Department::where('name_department', $request->name_department)->first();
    if (!$department) {
        return redirect()->back()->withErrors(['name_department' => 'Department not found']);
    }
    $id_department = $department->id_department;


    // Create user
    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'userType' => $request->userType,
    ]);

    // Create student
    $student = Student::create([
        'id_user' => $user->id,
        'security_number' => $request->security_number,
        'card_number' => $request->card_number,
        'date_of_birth' => $request->date_of_birth,
        'speciality' => $request->speciality,
        'level' => $request->level,
        'semester' => $request->semester,
        'college_year' => $request->college_year,
        'first_name_student' => $request->first_name,
        'last_name_student' => $request->last_name,
        'phone_student' => $request->phone_student,
        'email_student' => $request->email,
        'id_department' => $department->id_department, // set department id
    ]);

    // Redirect to home page
    $userType = $request->userType;

    $route = [
        'student' => 'StudentDashboard',
        'head_of_department' => 'HeadOfDepartmentDashboard',
        'internship_supervisor' => 'SupervisorDashboard'
    ];

    if (in_array($userType, ['student', 'head_of_department', 'internship_supervisor'])) {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'userType'=>$request->userType])) {
            return redirect()->intended(route($route[$userType]));
        }
    }
    }

    public function showLoginForm()
    {
        return view('pages-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'userType' => 'required'
        ]);



        $userType = $request->userType;

        $route = [
            'student' => 'StudentDashboard',
            'head_of_department' => 'HeadOfDepartmentDashboard',
            'internship_supervisor' => 'SupervisorDashboard'
        ];

        if (in_array($userType, ['student', 'head_of_department', 'internship_supervisor'])) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'userType'=>$request->userType])) {
                return redirect()->intended(route($route[$userType]));
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
 
    }

    public function logout()
    {
        Auth::logout();

        return view('pages-login');
    }

    public function redirectToWelcome(){
        return view('welcome-page');
    }


    
    
}
