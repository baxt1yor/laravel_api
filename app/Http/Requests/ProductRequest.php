<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = array(
            'products.store' => array(
                'name' => array(
                    'required',
                    'string',
                    'min:3'
                ),
                'detail' => array(
                    'required'
                ),
                'price' => array(
                    'required'
                ),
                'stock' => array(
                    'required'
                ),
                'discount' => array(
                    'required'
                )
            )
        );
        return $rules[$this->route()->getName()];
    }
}
