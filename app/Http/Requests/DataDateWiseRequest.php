<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class DataDateWiseRequest extends FormRequest
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
            'future_index_long' => 'required',
            'future_index_short'  => 'required',
            'long_index_long_short_percent'  => 'required',
            'future_stock_long'  => 'required',
            'future_stock_short'  => 'required',
            'option_index_call_long'  => 'required',
            'option_index_put_long'  => 'required',
            'option_index_buy_call_put_percentage'  => 'required',
            'option_index_call_short'  => 'required',
            'option_index_put_short'  => 'required',
            'option_index_short_call_put_percent'  => 'required',
            'option_stock_call_long'  => 'required',
            'option_stock_put_long'  => 'required',
            'option_stock_call_short'  => 'required',
            'option_stock_put_short'  => 'required',
            'total_long_contracts'  => 'required',
            'total_short_contracts'  => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'future_index_long.required' => 'Future index long required',
            'long_index_long_short_percent.required' => 'Long index long short_percent required',
            'future_stock_long.required' => 'Future stock long required',
            'future_stock_short.required' => 'Future stock short required',
            'option_index_call_long.required' => 'Option index call long required',
            'option_index_put_long.required' => 'Option index put long required',
            'option_index_buy_call_put_percentage.required' => 'Option index buy call put percentage required',
            'option_index_call_short.required' => 'Option index call short required',
            'option_index_put_short.required' => 'Option index put short required',
            'option_index_short_call_put_percent.required' => 'Option index short call put percent required',
            'option_stock_call_long.required' => 'Option stock call long required',
            'option_stock_put_long.required' => 'Option stock put long required',
            'option_stock_call_short.required' => 'Option stock call short required',
            'option_stock_put_short.required' => 'Option stock put short required',
            'total_long_contracts.required' => 'Total long contracts required',
            'total_short_contracts.required' => 'Total short contracts required',
        ];

    }

    protected function failedValidation(Validator $validator): ValidationException
    {
        $response['message'] = $validator->errors();
        $response['status'] = 'error';
        $response['status_code'] = 422;
        throw new HttpResponseException(response()->json($response, 422));
    }
}
