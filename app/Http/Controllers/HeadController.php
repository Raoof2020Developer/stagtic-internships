<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\HeadOfDepartment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\InternshipRequest;

class HeadController extends Controller
{
    public function HeadOfDepartmentDashboard()
    {
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

    return view('head.users-profile', ['userName' => $userName]);
    }

    public function changePassword(Request $request)
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
    return redirect()->back()->with('success');
    }

    public function HeadRequestList()
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
    
        return view('head.request_list_chef', ['userName' => $userName, 'requests' => $requests]);
    }
}
