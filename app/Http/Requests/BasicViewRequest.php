<?php

namespace App\Http\Requests;

use App\Constants\BasicViewConstants;
use App\ResponseCodes\BasicViewResponseCodes;
use Pearl\RequestValidate\RequestAbstract;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BasicViewRequest extends RequestAbstract
{

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
            'refrence_no' => 'required',
        ];
    }
    
    public function messages(): array
    {
        return [
            'refrence_no.required' => BasicViewResponseCodes::getMessageByStatusCode(
                BasicViewConstants::REFERENCE_NO_REQUIRED_CODE),
        ];
        
    }

    protected function failedValidation(Validator $validator): ValidationException { 
        $response['message'] = $validator->errors();
        $response['status'] = 'error';
        $response['status_code'] = 422; 
        throw new HttpResponseException(response()->json($response, 422)); 
    }
}
