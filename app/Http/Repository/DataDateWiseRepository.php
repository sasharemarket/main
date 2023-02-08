<?php

namespace App\Http\Repository;

use App\Http\Repository\CalculationsRepository;
use App\Models\DataDateWiseClient;
use App\Models\DataDateWiseDii;
use App\Models\DataDateWiseFii;
use App\Models\DataDateWisePro;
use DateTime;
use Illuminate\Http\Request;

class DataDateWiseRepository
{
    public function __construct()
    {
        $this->calculationsRepository = new CalculationsRepository();
    }

    public function getDataDateWiseClientSave(Request $request)
    {
        if (
            ($request['future_index_long'] != 0 && $request['future_index_short'] != 0) ||
            ($request['future_index_long'] != 0) ||
            ($request['future_index_short'] != 0)
        ) {
            $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }
        

        

        if (
            ($request['option_index_call_long'] != 0 && $request['option_index_put_long'] != 0) ||
            ($request['option_index_call_long'] != 0) ||
            ($request['option_index_put_long'] != 0)
        ) {
            $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }


        
        if (
            ($request['option_index_call_short'] != 0 && $request['option_index_put_short'] != 0) ||
            ($request['option_index_call_short'] != 0) ||
            ($request['option_index_put_short'] != 0)
        ) {
            $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);
        } else {
            $option_index_short_call_put_percent = 0;
        }

        $data_new = [
            // 'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage,
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

        // $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        // $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        // $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);


        if (
            ($request['future_index_long'] != 0 && $request['future_index_short'] != 0) ||
            ($request['future_index_long'] != 0) ||
            ($request['future_index_short'] != 0)
        ) {
            $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }
        

        

        if (
            ($request['option_index_call_long'] != 0 && $request['option_index_put_long'] != 0) ||
            ($request['option_index_call_long'] != 0) ||
            ($request['option_index_put_long'] != 0)
        ) {
            $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }


        
        if (
            ($request['option_index_call_short'] != 0 && $request['option_index_put_short'] != 0) ||
            ($request['option_index_call_short'] != 0) ||
            ($request['option_index_put_short'] != 0)
        ) {
            $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);
        } else {
            $option_index_short_call_put_percent = 0;
        }

        $data_new = [
            // 'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage,
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

        // $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        // $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        // $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);

        if (
            ($request['future_index_long'] != 0 && $request['future_index_short'] != 0) ||
            ($request['future_index_long'] != 0) ||
            ($request['future_index_short'] != 0)
        ) {
            $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }
        

        

        if (
            ($request['option_index_call_long'] != 0 && $request['option_index_put_long'] != 0) ||
            ($request['option_index_call_long'] != 0) ||
            ($request['option_index_put_long'] != 0)
        ) {
            $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }


        
        if (
            ($request['option_index_call_short'] != 0 && $request['option_index_put_short'] != 0) ||
            ($request['option_index_call_short'] != 0) ||
            ($request['option_index_put_short'] != 0)
        ) {
            $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);
        } else {
            $option_index_short_call_put_percent = 0;
        }

        $data_new = [
            // 'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage,
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

        // $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        // $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        // $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);

        if (
            ($request['future_index_long'] != 0 && $request['future_index_short'] != 0) ||
            ($request['future_index_long'] != 0) ||
            ($request['future_index_short'] != 0)
        ) {
            $long_index_long_short_percent = round($request['future_index_long'] / ($request['future_index_long'] + $request['future_index_short']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }
        

        

        if (
            ($request['option_index_call_long'] != 0 && $request['option_index_put_long'] != 0) ||
            ($request['option_index_call_long'] != 0) ||
            ($request['option_index_put_long'] != 0)
        ) {
            $option_index_buy_call_put_percentage = round($request['option_index_call_long'] / ($request['option_index_call_long'] + $request['option_index_put_long']) * 100, 2);
        } else {
            $long_index_long_short_percent = 0;
        }


        
        if (
            ($request['option_index_call_short'] != 0 && $request['option_index_put_short'] != 0) ||
            ($request['option_index_call_short'] != 0) ||
            ($request['option_index_put_short'] != 0)
        ) {
            $option_index_short_call_put_percent = round($request['option_index_call_short'] / ($request['option_index_call_short'] + $request['option_index_put_short']) * 100, 2);
        } else {
            $option_index_short_call_put_percent = 0;
        }

        $data_new = [
            // 'data_date_wise_id' => time().date("Ymd"),
            'date_of_entry' => date("d-m-Y"),
            'future_index_long' => $request['future_index_long'],
            'future_index_short' => $request['future_index_short'],
            'long_index_long_short_percent' => $long_index_long_short_percent,
            'future_stock_long' => $request['future_stock_long'],
            'future_stock_short' => $request['future_stock_short'],
            'option_index_call_long' => $request['option_index_call_long'],
            'option_index_put_long' => $request['option_index_put_long'],
            'option_index_buy_call_put_percentage' => $option_index_buy_call_put_percentage,
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

        DataDateWisePro::insert($data_new);
        sleep(15);
        $this->getTotalOfClientDIIFIIPro();
        return "ok";
    }

    public function getTotalOfClientDIIFIIPro()
    {
        $this->calculationsRepository->getCalcLongShortIncDecPrevDaySave();
        sleep(3);
        $this->calculationsRepository->getCalcOptionBuyingContractsCallPutSave();
        sleep(3);
        $this->calculationsRepository->getCalcOptionSellingContractsCallPutSave();
    }
}
