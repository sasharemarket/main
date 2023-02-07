<?php
namespace App\Traits;
use App\Models\ApplicationStages;
trait GetBinsTrait {

    public function getImporterApplicationBins($data)
    {      
         $role_id = $data['role_id'];
         $stage_id = $data['stage_id'];
        $result=ApplicationStages::join('bins','application_stages.id','=','bins.stage_id')
                                 ->where('bins.is_active', '=',true)
                                 ->where('bins.role_id', '=',$role_id)
                                 ->where('bins.stage_id', '=',$stage_id)
                                 ->orderBy('bins.order_no','asc')
                                 ->select('bins.name','bins.url','bins.application_constant as application_stage_status')
                                 ->get();
        \Log::info($result);
        return $result;
    }
    
    public function getBinsApplicationTraits($data)
    {
       $role_id = $data['role_id'];
       $stage_id = $data['stage_id'];
        $result=ApplicationStages::join('bins','application_stages.id','=','bins.stage_id')
                                 ->where('bins.is_active', '=',true)
                                 ->where('bins.role_id', '=',$role_id)
                                 ->where('bins.stage_id', '=',$stage_id)
                                 ->orderBy('bins.order_no','asc')
                                 ->select('bins.name','bins.url','bins.application_constant as application_stage_status')
                                 ->get();
        
        return $result;
    }
}