<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function store(Request $request){
        $company = new Company;
        
        $company-> name_company = $request->input('name_company');
        $company-> adresse = $request->input('adresse');
        $company-> 	phone_number = $request->input('phone_number');
        $company-> 	email = $request->input('email');
        $company ->save();
 
         return redirect()->back()->with('success','company Added Succsefully');
    
    }

    /*public function store(Request $request)
    {
        $companyId = $request->input('id_company');
        $company = null;

        if ($companyId === 'new') {
                $company = new Company;
        } else {
                $company = Company::find($companyId);
        }

        $company->name_company = $request->input('name_company');
        $company->adresse = $request->input('adresse');
        $company->phone_number = $request->input('phone_number');
        $company->email = $request->input('email');
        $company->save();

        return redirect()->back()->with('success', 'Company saved successfully');
    }*/

    public function create()
    {
    $companies = Company::all();
    return view('student.index',['companies' => $companies]);
    }

    public function getCompanyInfo($companyId) {
        $company = App\Models\Company::findOrFail($companyId);
        return response()->json([
            'address' => $company->adresse,
            'phone' => $company->phone_number,
            'email' => $company->email
        ]);
    }
   
}
