<?php

namespace App\Http\Requests;

use App\Models\PhoneUser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'min:4', 'max:10'],
            'last_name' => ['required', 'string', 'min:5', 'max:10'],
            'email' => ['sometimes', 'email', 'unique:phone_users,email'],
            'phone_number' => ['required', 'string', 'min:10', 'max:10'],
            'gender' => ['sometimes', Rule::in(PhoneUser::GENDERS)],
        ];
    }
}
