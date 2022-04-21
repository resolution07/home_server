<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Boolean;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user' => 'required|array',
            'user.name' => 'required',
            'user.email' => 'required|email',
            'user.password' => 'required|min:5',
            'roles' => 'sometimes|array'
        ];
    }
}
