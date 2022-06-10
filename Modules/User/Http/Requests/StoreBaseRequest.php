<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBaseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => [
                'required',
                Rule::unique('users','username')->ignore($this->row_id,'row_id'),
            ],
            'email' => [
                'required',
                Rule::unique('users','email')->ignore($this->row_id,'row_id'),
            ],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
