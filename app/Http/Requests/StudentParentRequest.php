<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentParentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'father_name' => 'required|string|min:3',
            'father_contact' => 'nullable|required_without:mother_contact|alpha_num|digits:10',
            'father_whatsapp' => 'nullable|required_without:mother_whatsapp|alpha_num|digits:10',
            'father_aadhaar' => 'nullable|required_without:mother_aadhaar|alpha_num|size:12',

            'mother_name' => 'required|string|min:3',
            'mother_contact' => 'nullable|required_without:father_contact|alpha_num|digits:10',
            'mother_whatsapp' => 'nullable|required_without:father_whatsapp|alpha_num|digits:10',
            'mother_aadhaar' => 'nullable|required_without:father_aadhaar|alpha_num|size:12',
            'address' => 'required|string|min:10'
        ];
        // return [
        //     // FOR FATHER
        //     // name
        //     'father_name' => [
        //         'required_if' => function ($data) {
        //             return !isset($data['mother_name']) || empty($data['mother_name']);
        //         },
        //         'min' => 3,
        //         'alpha_num', // Optional, but good practice to specify the data type
        //     ],

        //     // contact
        //     'father_contact' => [
        //         'required_if' => function ($data) {
        //             return !isset($data['mother_contact']) || empty($data['mother_contact']);
        //         },
        //         'size' => 10,
        //         'alpha_num', // Optional, but good practice to specify the data type
        //     ],
        //     // contact2
        //     'father_contact_2' => 'nullable|min:3|digits:10',

        //     // MOTHER
        //     // name
        //     'mother_name' => [
        //         'required_if' => function ($data) {
        //             return !isset($data['father_name']) || empty($data['father_name']);
        //         },
        //         'min' => 3,
        //         'string', // Optional, but good practice to specify the data type
        //     ],

        //     // contact
        //     'mother_contact' => [
        //         'required_if' => function ($data) {
        //             return !isset($data['father_contact']) || empty($data['father_contact']);
        //         },
        //         'size' => 10,
        //         'alpha_num', // Optional, but good practice to specify the data type
        //     ],
        //     'mother_contact_2' => 'nullable|min:3|digits:10',
        // ];
    }
}
