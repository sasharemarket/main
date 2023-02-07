<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repository\DataDateWiseRepository;
use App\Http\Requests\DataDateWiseRequest;

class DataDateWiseController extends Controller
{
    public function __construct()
    {
        $this->repository = new DataDateWiseRepository();
    }
    
    public function getDataDateWiseClient() {
        // $academicYears =$this->service->getAcademicyeardata();
        return view('data_date_wise.data_datewise_client');
    }
    
    public function getDataDateWiseClientSave(DataDateWiseRequest $request) {
        $validated = $request->validated();
        $data =  $this->repository->getDataDateWiseClientSave($request);
        return view('data_date_wise.data_datewise_dii');
    }

    public function getDataDateWiseDii(){
        return view('data_date_wise.data_datewise_dii');
        
    }

    public function getDataDateWiseDiiSave(DataDateWiseRequest $request) {
        $data =  $this->repository->getDataDateWiseDiiSave($request);
        return view('data_date_wise.data_datewise_fii');
    }

    public function getDataDateWiseFii(){
        return view('data_date_wise.data_datewise_fii');
        
    }

    public function getDataDateWiseFiiSave(DataDateWiseRequest $request) {
        $data =  $this->repository->getDataDateWiseFiiSave($request);
        return view('data_date_wise.data_datewise_pro');
    }

    public function getDataDateWisePro(){
        return view('data_date_wise.data_datewise_pro');
        
    }

    public function getDataDateWiseProSave(DataDateWiseRequest $request) {
        $data =  $this->repository->getDataDateWiseProSave($request);
    }
}

