<?php

namespace App\Http\Repository;

use App\Models\DataDateWiseClient;
use App\Models\DataDateWiseDii;
use App\Models\DataDateWiseFii;
use App\Models\DataDateWisePro;
use Illuminate\Http\Request;

class DataDateWiseRepository
{
    public function __construct()
    {
    }

    public function getDataDateWiseClientSave(Request $request)
    {

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long_client' => $request['future_index_long_client'],
            'future_index_short_client' => $request['future_index_short_client'],
            'long_index_long_short_percent_client' => $request['long_index_long_short_percent_client'],
            'future_stock_long_client' => $request['future_stock_long_client'],
            'future_stock_short_client' => $request['future_stock_short_client'],
            'option_index_call_long_client' => $request['option_index_call_long_client'],
            'option_index_put_long_client' => $request['option_index_put_long_client'],
            'option_index_buy_call_put_percentage_client' => $request['option_index_buy_call_put_percentage_client'],
            'option_index_call_short_client' => $request['option_index_call_short_client'],
            'option_index_put_short_client' => $request['option_index_put_short_client'],
            'option_index_short_call_put_percent_client' => $request['option_index_short_call_put_percent_client'],
            'option_stock_call_long_client' => $request['option_stock_call_long_client'],
            'option_stock_put_long_client' => $request['option_stock_put_long_client'],
            'option_stock_call_short_client' => $request['option_stock_call_short_client'],
            'option_stock_put_short_client' => $request['option_stock_put_short_client'],
            'total_long_contracts_client' => $request['total_long_contracts_client'],
            'total_short_contracts_client' => $request['total_short_contracts_client'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWiseClient::insert($data_new);
    }

    public function getDataDateWiseDiiSave(Request $request)
    {

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long_dii' => $request['future_index_long_dii'],
            'future_index_short_dii' => $request['future_index_short_dii'],
            'long_index_long_short_percent_dii' => $request['long_index_long_short_percent_dii'],
            'future_stock_long_dii' => $request['future_stock_long_dii'],
            'future_stock_short_dii' => $request['future_stock_short_dii'],
            'option_index_call_long_dii' => $request['option_index_call_long_dii'],
            'option_index_put_long_dii' => $request['option_index_put_long_dii'],
            'option_index_buy_call_put_percentage_dii' => $request['option_index_buy_call_put_percentage_dii'],
            'option_index_call_short_dii' => $request['option_index_call_short_dii'],
            'option_index_put_short_dii' => $request['option_index_put_short_dii'],
            'option_index_short_call_put_percent_dii' => $request['option_index_short_call_put_percent_dii'],
            'option_stock_call_long_dii' => $request['option_stock_call_long_dii'],
            'option_stock_put_long_dii' => $request['option_stock_put_long_dii'],
            'option_stock_call_short_dii' => $request['option_stock_call_short_dii'],
            'option_stock_put_short_dii' => $request['option_stock_put_short_dii'],
            'total_long_contracts_dii' => $request['total_long_contracts_dii'],
            'total_short_contracts_dii' => $request['total_short_contracts_dii'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWiseDii::insert($data_new);
    }

    public function getDataDateWiseFiiSave(Request $request)
    {

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long_fii' => $request['future_index_long_fii'],
            'future_index_short_fii' => $request['future_index_short_fii'],
            'long_index_long_short_percent_fii' => $request['long_index_long_short_percent_fii'],
            'future_stock_long_fii' => $request['future_stock_long_fii'],
            'future_stock_short_fii' => $request['future_stock_short_fii'],
            'option_index_call_long_fii' => $request['option_index_call_long_fii'],
            'option_index_put_long_fii' => $request['option_index_put_long_fii'],
            'option_index_buy_call_put_percentage_fii' => $request['option_index_buy_call_put_percentage_fii'],
            'option_index_call_short_fii' => $request['option_index_call_short_fii'],
            'option_index_put_short_fii' => $request['option_index_put_short_fii'],
            'option_index_short_call_put_percent_fii' => $request['option_index_short_call_put_percent_fii'],
            'option_stock_call_long_fii' => $request['option_stock_call_long_fii'],
            'option_stock_put_long_fii' => $request['option_stock_put_long_fii'],
            'option_stock_call_short_fii' => $request['option_stock_call_short_fii'],
            'option_stock_put_short_fii' => $request['option_stock_put_short_fii'],
            'total_long_contracts_fii' => $request['total_long_contracts_fii'],
            'total_short_contracts_fii' => $request['total_short_contracts_fii'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWiseFii::insert($data_new);
    }

    public function getDataDateWiseProSave(Request $request)
    {
        
        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long_pro' => $request['future_index_long_pro'],
            'future_index_short_pro' => $request['future_index_short_pro'],
            'long_index_long_short_percent_pro' => $request['long_index_long_short_percent_pro'],
            'future_stock_long_pro' => $request['future_stock_long_pro'],
            'future_stock_short_pro' => $request['future_stock_short_pro'],
            'option_index_call_long_pro' => $request['option_index_call_long_pro'],
            'option_index_put_long_pro' => $request['option_index_put_long_pro'],
            'option_index_buy_call_put_percentage_pro' => $request['option_index_buy_call_put_percentage_pro'],
            'option_index_call_short_pro' => $request['option_index_call_short_pro'],
            'option_index_put_short_pro' => $request['option_index_put_short_pro'],
            'option_index_short_call_put_percent_pro' => $request['option_index_short_call_put_percent_pro'],
            'option_stock_call_long_pro' => $request['option_stock_call_long_pro'],
            'option_stock_put_long_pro' => $request['option_stock_put_long_pro'],
            'option_stock_call_short_pro' => $request['option_stock_call_short_pro'],
            'option_stock_put_short_pro' => $request['option_stock_put_short_pro'],
            'total_long_contracts_pro' => $request['total_long_contracts_pro'],
            'total_short_contracts_pro' => $request['total_short_contracts_pro'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWisePro::insert($data_new);
    }
}