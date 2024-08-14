<?php

namespace App\Http\Requests\Token;

use App\Traits\FailedValidationException;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    use FailedValidationException;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'token_name' => 'required',
        ];
    }
}
