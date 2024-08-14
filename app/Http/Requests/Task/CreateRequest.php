<?php

namespace App\Http\Requests\Task;

use App\Models\Task;
use App\Traits\FailedValidationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'title' => 'required',
            'description' => 'required',
            'status' => ['required', Rule::in([...Task::STATUS])],
        ];
    }
}
