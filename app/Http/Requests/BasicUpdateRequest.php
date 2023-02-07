<?php

namespace App\Http\Requests;

use App\Constants\BasicUpdateConstants;
use App\ResponseCodes\BasicUpdateResponseCodes;
use Pearl\RequestValidate\RequestAbstract;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BasicUpdateRequest extends RequestAbstract
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
            'refrence_no'             => 'required',
            'purpose_of_import'       => 'required',
            // 'mode_of_transport'       => 'required',

            'exporting_country'       => 'required',
            'ie_code'                 => 'required',
            'boe_no'                  => 'required',
            'boe_date'                => 'required',
            'import_type'             => 'required',

            'igm_arrival_date'        => 'required_if:boe_type,==,regular',
            'cfs_location'            => 'required_if:boe_type,==,regular',
            // 'igm_no'                  => 'required_if:boe_type,==,regular',
        
        ];
    }
    
    public function messages(): array
    {
        return [
            'refrence_no.required' => BasicUpdateResponseCodes::getMessageByStatusCode(
                BasicUpdateConstants::REFERENCE_NO_REQUIRED_CODE),
            'purpose_of_import.required' => BasicUpdateResponseCodes::getMessageByStatusCode(
                BasicUpdateConstants::PURPOSE_OF_IMPORT_TEXT_REQUIRED_CODE),
            // 'transit_country.required' => BasicUpdateResponseCodes::getMessageByStatusCode(
            //     BasicUpdateConstants::TRANSIT_COUNTRY_TEXT_REQUIRED_CODE),
            // 'mode_of_transport.required' => BasicUpdateResponseCodes::getMessageByStatusCode(
            //     BasicUpdateConstants::MODE_OF_TRANSPORT_TEXT_REQUIRED_CODE),
            // 'igm_arrival_date.required'=>BasicUpdateResponseCodes::getMessageByStatusCode(
            //     BasicUpdateConstants::IGM_ARRIVAL_DATE_TEXT_REQUIRED_CODE),
            // 'cfs_location.required'=>BasicUpdateResponseCodes::getMessageByStatusCode(
            //     BasicUpdateConstants::CFS_LOCATION_TEXT_REQUIRED_CODE),
            // 'point_of_entry.required'=>BasicUpdateResponseCodes::getMessageByStatusCode(
            //     BasicUpdateConstants::POINT_OF_ENTRY_TEXT_REQUIRED_CODE),

        ];
        
    }

    protected function failedValidation(Validator $validator): ValidationException { 
        $response['message'] = $validator->errors();
        $response['status'] = 'error';
        $response['status_code'] = 422; 
        throw new HttpResponseException(response()->json($response, 422)); 
    }
}
