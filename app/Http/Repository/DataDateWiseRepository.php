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
        $long_index_long_short_percent = $request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100;
        $option_index_buy_call_put_percentage = $request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100;
        $option_index_short_call_put_percent = $request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100;

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage ,
            'option_index_call_short' => $request['option_index_call_short'],
            'option_index_put_short' => $request['option_index_put_short'],
            'option_index_short_call_put_percent' => $option_index_short_call_put_percent,
            'option_stock_call_long' => $request['option_stock_call_long'],
            'option_stock_put_long' => $request['option_stock_put_long'],
            'option_stock_call_short' => $request['option_stock_call_short'],
            'option_stock_put_short' => $request['option_stock_put_short'],
            'total_long_contracts' => $request['total_long_contracts'],
            'total_short_contracts' => $request['total_short_contracts'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWiseClient::insert($data_new);
    }

    public function getDataDateWiseDiiSave(Request $request)
    {

        $long_index_long_short_percent = $request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100;
        $option_index_buy_call_put_percentage = $request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100;
        $option_index_short_call_put_percent = $request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100;

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage ,
            'option_index_call_short' => $request['option_index_call_short'],
            'option_index_put_short' => $request['option_index_put_short'],
            'option_index_short_call_put_percent' => $option_index_short_call_put_percent,
            'option_stock_call_long' => $request['option_stock_call_long'],
            'option_stock_put_long' => $request['option_stock_put_long'],
            'option_stock_call_short' => $request['option_stock_call_short'],
            'option_stock_put_short' => $request['option_stock_put_short'],
            'total_long_contracts' => $request['total_long_contracts'],
            'total_short_contracts' => $request['total_short_contracts'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWiseDii::insert($data_new);
    }

    public function getDataDateWiseFiiSave(Request $request)
    {

        $long_index_long_short_percent = $request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100;
        $option_index_buy_call_put_percentage = $request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100;
        $option_index_short_call_put_percent = $request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100;

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage ,
            'option_index_call_short' => $request['option_index_call_short'],
            'option_index_put_short' => $request['option_index_put_short'],
            'option_index_short_call_put_percent' => $option_index_short_call_put_percent,
            'option_stock_call_long' => $request['option_stock_call_long'],
            'option_stock_put_long' => $request['option_stock_put_long'],
            'option_stock_call_short' => $request['option_stock_call_short'],
            'option_stock_put_short' => $request['option_stock_put_short'],
            'total_long_contracts' => $request['total_long_contracts'],
            'total_short_contracts' => $request['total_short_contracts'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWiseFii::insert($data_new);
    }

    public function getDataDateWiseProSave(Request $request)
    {
        
        $long_index_long_short_percent = $request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100;
        $option_index_buy_call_put_percentage = $request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100;
        $option_index_short_call_put_percent = $request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100;

        $data_new = [
            'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage ,
            'option_index_call_short' => $request['option_index_call_short'],
            'option_index_put_short' => $request['option_index_put_short'],
            'option_index_short_call_put_percent' => $option_index_short_call_put_percent,
            'option_stock_call_long' => $request['option_stock_call_long'],
            'option_stock_put_long' => $request['option_stock_put_long'],
            'option_stock_call_short' => $request['option_stock_call_short'],
            'option_stock_put_short' => $request['option_stock_put_short'],
            'total_long_contracts' => $request['total_long_contracts'],
            'total_short_contracts' => $request['total_short_contracts'],
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
        return DataDateWisePro::insert($data_new);
    }
}