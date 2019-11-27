<?php

namespace Modules\PrintAuto\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingPrintAutoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number_copies' => 'integer|min:1',
            'auto' => 'integer|between:0,1',
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
