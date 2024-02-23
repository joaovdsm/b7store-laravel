<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $user_id = auth()->user()->id();
        return [
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            'email' => ['required', 'email', 'unique:users', Rule::unique('users')->ignore($user_id)],
            'state' => 'required|numeric'
        ];
    }
}
