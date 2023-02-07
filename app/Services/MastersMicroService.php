<?php

namespace App\Services;

use App\Traits\MasterRequest;

class MastersMicroService
{
    use MasterRequest;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = env('BOE_HANDLING_MICROSERVICE_SERVICE_BASE_URI');
        $this->secret = env('BOE_HANDLING_MICROSERVICE_SERVICE_SECRET');
    }

    public function sendDataForRloPart($req)
    {
        return $this->request('POST', $this->baseUri.'generate-rlo',$req);
    }
}