<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
trait MasterRequest
{

    public function request($method, $requestUrl, $formParams = [], $headers = [])
    {
        try 
        {
            $client = new Client([
                'base_uri' => $this->baseUri
            ]);
            if (isset($this->secret)) {
                $headers['Authorization'] = $this->secret;
            }
            $response = $client->request($method, $requestUrl,
                [
                    'form_params' => $formParams,
                    'headers' => $headers
                ]
            );
            return json_decode($response->getBody()->getContents(),true);

        } 
        catch (\GuzzleHttp\Exception\RequestException $e) {
            $statusCode=$e->getResponse()->getStatusCode();
            $message=$e->getResponse()->getBody()->getContents();
           

            $jsonData=json_decode($message,true);
            $response['message'] =$jsonData['message'];
                    
            //$response['message'] = json_decode($message,true);
            $response['status'] = 'error';
            $response['status_code'] = $statusCode; 
            throw new HttpResponseException(response()->json($response,$statusCode)); 

           
            
        }
        
    }

}