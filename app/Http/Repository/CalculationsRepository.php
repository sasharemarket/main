<?php

namespace App\Http\Repository;

use App\Models\CalcLongShortIncDecPrevDay;
use App\Models\CalcOptionBuyingContractsCallPut;
use App\Models\CalcOptionSellingContractsCallPut;

use App\Models\DataDateWiseClient;
use App\Models\DataDateWiseDii;
use App\Models\DataDateWiseFii;
use App\Models\DataDateWisePro;
use Illuminate\Http\Request;
use DateTime;

class CalculationsRepository
{
    public function __construct()
    {

        $date_prev_format = new DateTime();
        $prev_date = $date_prev_format->modify("-1 days")->format('d-m-Y');

        $this->data_client_prev_day = DataDateWiseClient::where (['date_of_entry' => $prev_date])->first();
        $this->data_client_today = DataDateWiseClient::where (['date_of_entry' => date("d-m-Y")])->first();

        $this->data_dii_prev_day = DataDateWiseDii::where (['date_of_entry' => $prev_date])->first();
        $this->data_dii_today = DataDateWiseDii::where (['date_of_entry' => date("d-m-Y")])->first();


        $this->data_fii_prev_day = DataDateWiseFii::where (['date_of_entry' => $prev_date])->first();
        $this->data_fii_today = DataDateWiseFii::where (['date_of_entry' => date("d-m-Y")])->first();

        $this->data_pro_prev_day = DataDateWisePro::where (['date_of_entry' => $prev_date])->first();
        $this->data_pro_today = DataDateWisePro::where (['date_of_entry' => date("d-m-Y")])->first();

    }

    public function getCalcLongShortIncDecPrevDaySave()
    {

      

       if($this->data_client_prev_day) {

            $data_new = [
                'date_of_entry' => date("d-m-Y"),
                'client' => round( ( $this->data_client_today->long_index_long_short_percent -  $this->data_client_prev_day->long_index_long_short_percent), 2),
                'dii' => round( ( $this->data_dii_today->long_index_long_short_percent -  $this->data_dii_prev_day->long_index_long_short_percent), 2),
                'fii' => round( ( $this->data_fii_today->long_index_long_short_percent -  $this->data_fii_prev_day->long_index_long_short_percent), 2),
                'pro' => round( ( $this->data_pro_today->long_index_long_short_percent -  $this->data_pro_prev_day->long_index_long_short_percent), 2),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];

       } else {

            $data_new = [
                'date_of_entry' => date("d-m-Y"),
                'client' => $this->data_client_today->long_index_long_short_percent,
                'dii' => $this->data_dii_today->long_index_long_short_percent,
                'fii' => $this->data_fii_today->long_index_long_short_percent,
                'pro' => $this->data_pro_today->long_index_long_short_percent,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];

       }
       
        return CalcLongShortIncDecPrevDay::insert($data_new);
    }

    public function getCalcOptionBuyingContractsCallPutSave()
    {
        if($this->data_client_prev_day) {
            $data_new = [
                'date_of_entry' => date("d-m-Y"),
                'client_call' => round( ( $this->data_client_today->option_index_call_long -  $this->data_client_prev_day->option_index_call_long), 2),
                'dii_call' => round( ( $this->data_dii_today->option_index_call_long -  $this->data_dii_prev_day->option_index_call_long), 2),
                'fii_call' => round( ( $this->data_fii_today->option_index_call_long -  $this->data_fii_prev_day->option_index_call_long), 2),
                'pro_call' => round( ( $this->data_pro_today->option_index_call_long -  $this->data_pro_prev_day->option_index_call_long), 2),

                'client_put' => round( ( $this->data_client_today->option_index_put_long -  $this->data_client_prev_day->option_index_put_long), 2),
                'dii_put' => round( ( $this->data_dii_today->option_index_put_long -  $this->data_dii_prev_day->option_index_put_long), 2),
                'fii_put' => round( ( $this->data_fii_today->option_index_put_long -  $this->data_fii_prev_day->option_index_put_long), 2),
                'pro_put' => round( ( $this->data_pro_today->option_index_put_long -  $this->data_pro_prev_day->option_index_put_long), 2),

                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];

        } else {

            $data_new = [
                'date_of_entry' => date("d-m-Y"),
                'client_call' => $this->data_client_today->option_index_call_long ,
                'dii_call' => $this->data_dii_today->option_index_call_long ,
                'fii_call' => $this->data_fii_today->option_index_call_long ,
                'pro_call' => $this->data_pro_today->option_index_call_long ,

                'client_put' => $this->data_client_today->option_index_put_long ,
                'dii_put' => $this->data_dii_today->option_index_put_long ,
                'fii_put' => $this->data_fii_today->option_index_put_long ,
                'pro_put' => $this->data_pro_today->option_index_put_long ,

                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];

        }
      
        return CalcOptionBuyingContractsCallPut::insert($data_new);
    }

    public function getCalcOptionSellingContractsCallPutSave()
    {

        if($this->data_client_prev_day) {
            $data_new = [
                'date_of_entry' => date("d-m-Y"),
                'client_call' => round( ( $this->data_client_today->option_index_call_short -  $this->data_client_prev_day->option_index_call_short), 2),
                'dii_call' => round( ( $this->data_dii_today->option_index_call_short -  $this->data_dii_prev_day->option_index_call_short), 2),
                'fii_call' => round( ( $this->data_fii_today->option_index_call_short -  $this->data_fii_prev_day->option_index_call_short), 2),
                'pro_call' => round( ( $this->data_pro_today->option_index_call_short -  $this->data_pro_prev_day->option_index_call_short), 2),

                'client_put' => round( ( $this->data_client_today->option_index_put_short -  $this->data_client_prev_day->option_index_put_short), 2),
                'dii_put' => round( ( $this->data_dii_today->option_index_put_short -  $this->data_dii_prev_day->option_index_put_short), 2),
                'fii_put' => round( ( $this->data_fii_today->option_index_put_short -  $this->data_fii_prev_day->option_index_put_short), 2),
                'pro_put' => round( ( $this->data_pro_today->option_index_put_short -  $this->data_pro_prev_day->option_index_put_short), 2),

                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];

        } else {

            $data_new = [
                'date_of_entry' => date("d-m-Y"),
                'client_call' => $this->data_client_today->option_index_call_short ,
                'dii_call' => $this->data_dii_today->option_index_call_short ,
                'fii_call' => $this->data_fii_today->option_index_call_short ,
                'pro_call' => $this->data_pro_today->option_index_call_short ,

                'client_put' => $this->data_client_today->option_index_put_short ,
                'dii_put' => $this->data_dii_today->option_index_put_short ,
                'fii_put' => $this->data_fii_today->option_index_put_short ,
                'pro_put' => $this->data_pro_today->option_index_put_short ,

                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];

        }
      
        return CalcOptionSellingContractsCallPut::insert($data_new);
    }

}