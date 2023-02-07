<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repository\DataDateWiseRepository;

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
    
    public function getDataDateWiseClientSave(Request $request) {
        $data =  $this->repository->getDataDateWiseClientSave($request);
    }

    public function getDataDateWiseDii(){
        return view('data_date_wise.data_datewise_dii');
        
    }

    public function getDataDateWiseDiiSave(Request $request) {
        $data =  $this->repository->getDataDateWiseDiiSave($request);
    }

    public function getDataDateWiseFii(){
        return view('data_date_wise.data_datewise_fii');
        
    }

    public function getDataDateWiseFiiSave(Request $request) {
        $data =  $this->repository->getDataDateWiseFiiSave($request);
    }

    public function getDataDateWisePro(){
        return view('data_date_wise.data_datewise_pro');
        
    }

    public function getDataDateWiseProSave(Request $request) {
        $data =  $this->repository->getDataDateWiseProSave($request);
    }
}

