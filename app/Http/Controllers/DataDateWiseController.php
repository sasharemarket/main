<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repository\DataDateWiseRepository;
use App\Http\Requests\DataDateWiseRequest;

class DataDateWiseController extends Controller
{
    public function __construct()
    {
        $this->repository = new DataDateWiseRepository();
    }

    public function getDataDateWiseClient()
    {
        return view('data_date_wise.data_datewise_client');
    }

    public function getDataDateWiseClientSave(DataDateWiseRequest $request)
    {
        try {
            $data = $this->repository->getDataDateWiseClientSave($request);
            return $this->responseApi($data, 'Client data saved successfully', 'scuccess', 200);

        } catch (\Exception $e) {
            return $this->responseApi(array(), $e->getMessage(), 'error', 500);
        }
    }

    public function getDataDateWiseDii()
    {
        return view('data_date_wise.data_datewise_dii');

    }

    public function getDataDateWiseDiiSave(DataDateWiseRequest $request)
    {
        try {
            $data = $this->repository->getDataDateWiseDiiSave($request);
            return $this->responseApi($data, 'DII data saved successfully', 'scuccess', 200);

        } catch (\Exception $e) {
            return $this->responseApi(array(), $e->getMessage(), 'error', 500);
        }
    }

    public function getDataDateWiseFii()
    {
        return view('data_date_wise.data_datewise_fii');

    }

    public function getDataDateWiseFiiSave(DataDateWiseRequest $request)
    {
        try {
            $data = $this->repository->getDataDateWiseFiiSave($request);
            return $this->responseApi($data, 'FII data saved successfully', 'scuccess', 200);

        } catch (\Exception $e) {
            return $this->responseApi(array(), $e->getMessage(), 'error', 500);
        }
    }

    public function getDataDateWisePro()
    {
        return view('data_date_wise.data_datewise_pro');

    }

    public function getDataDateWiseProSave(DataDateWiseRequest $request)
    {
        try {
            $data = $this->repository->getDataDateWiseProSave($request);
            return $this->responseApi($data, 'Pro data saved successfully', 'scuccess', 200);

        } catch (\Exception $e) {
            return $this->responseApi(array(), $e->getMessage(), 'error', 500);
        }
    }
}
