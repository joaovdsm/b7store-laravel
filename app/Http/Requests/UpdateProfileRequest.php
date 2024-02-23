<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Imports Adicionais
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $user_id = auth()->user()->id;
        return [
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user_id)],
            'state_id' => 'required|numeric|exists:states,id' // Para colocar a verificação de existencia, basta adicionar o exists:table,column
        ];
    }
}
