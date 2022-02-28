<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function saveCurrency(Request $request)
    {
        $datas = Http::get('https://v6.exchangerate-api.com/v6/5775548f5cecdf2afa0a0668/latest/USD');
        dd(json_decode($datas, true));
        foreach($datas as $data){
            dd($data);
        }
        // return $data;
    }
}
