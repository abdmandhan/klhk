<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebStore extends FormRequest
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
            'name'              => ['required'],
            'id_eselon'         => ['required', 'exists:eselons,id'],
            'id_web_category'   => ['required', 'exists:eselons,id'],
            'url_name'          => ['required'],
            'ip_address'        => ['required', 'ipv4'],
            'description'       => ['required'],
            'image'             => ['required'],
        ];
    }
}
