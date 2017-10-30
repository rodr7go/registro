<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class CreateProspect extends Request
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
            'website' => '',
            'url' => '',
            'address' => '',
            'order' => '',
            'email' => '',
            'phone' => '',
            'contact_name' => '',
            'comments' => '',
            'tracing' => '',
            'status' => ''
        ];
    }
}
