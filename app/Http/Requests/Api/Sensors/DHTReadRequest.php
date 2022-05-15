<?php

namespace App\Http\Requests\Api\Sensors;

use Illuminate\Foundation\Http\FormRequest;

class DHTReadRequest extends FormRequest
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
            'limit' => 'sometimes|integer',
            'page' => 'sometimes|integer'
        ];
    }

    /**
     * Returns items limit on page
     *
     * @return int
     */
    public function getLimit(): int
    {
        return (int)$this->get('limit') ?? 10;
    }

    /**
     * Returns page number
     *
     * @return int
     */
    public function getPage(): int
    {
        return (int)$this->get('page') ?? 1;
    }
}
