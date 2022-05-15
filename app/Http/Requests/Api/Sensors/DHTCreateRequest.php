<?php

namespace App\Http\Requests\Api\Sensors;

use Illuminate\Foundation\Http\FormRequest;

class DHTCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'humidity' => 'required|numeric|between:0,99.99',
            'temperature' => 'required|numeric|between:0,99.99',
            'heat_index' => 'numeric|between:0,99.99'
        ];
    }
}
