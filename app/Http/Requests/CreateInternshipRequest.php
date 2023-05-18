<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInternshipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
{
    return [
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'internship_theme' => 'required|string',
        'workplan' => 'nullable|string',
        'period' => 'nullable|string',
        'name_company' => 'required|string',
        'adresse' => 'required|string',
        'phone_number' => 'nullable|string',
        'email' => 'nullable|email',
        'first_name_internship_supervisor' => 'required|string',
        'last_name_internship_supervisor' => 'required|string',
        'email_internship_supervisor' => 'required|email',
        'phone_internship_supervisor' => 'nullable|string',
    ];
}
}
