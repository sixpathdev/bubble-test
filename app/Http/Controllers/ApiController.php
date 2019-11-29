<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{

    public function getbitcoindata() {
        $clientApi = new Client();

        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/bitcoin');
        $statusCode = $response->getStatusCode();
        if($statusCode == 200) {
            $payload = $response->getBody()->getContents();
            $payloadbody = json_decode($payload);
            
            //Extracted data
            $extracted_data = [
                'symbol' => $payloadbody->symbol,
                'name' => $payloadbody->name,
                'usd' => $payloadbody->market_data->current_price->usd,
                'eur' => $payloadbody->market_data->current_price->eur,

            ];

            // return json_encode($extracted_data);
            return view('bitcoin', compact('extracted_data'));
        }
        
    }

    public function getbitcoinjson()
    {
        $clientApi = new Client();

        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/bitcoin');
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $payload = $response->getBody()->getContents();
            $payloadbody = json_decode($payload);

            //Extracted data
            $extracted_data = [
                'symbol' => $payloadbody->symbol,
                'name' => $payloadbody->name,
                'usd' => $payloadbody->market_data->current_price->usd,
                'eur' => $payloadbody->market_data->current_price->eur,

            ];

            // return json_encode($extracted_data);
            // return view('bitcoin', compact('extracted_data'));
            $raw = json_encode($extracted_data);
            return view('bitcoinjson', compact('raw'));
        }
    }





    public function getzcashdata()
    {
        $clientApi = new Client();

        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/zcash');
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $payload = $response->getBody()->getContents();
            $payloadbody = json_decode($payload);

            //Extracted data
            $extracted_data = [
                'symbol' => $payloadbody->symbol,
                'name' => $payloadbody->name,
                'usd' => $payloadbody->market_data->current_price->usd,
                'eur' => $payloadbody->market_data->current_price->eur,

            ];

            // return json_encode($extracted_data);
            return view('zcash', compact('extracted_data'));
        }
    }

    public function getzcashjson()
    {
        $clientApi = new Client();

        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/zcash');
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $payload = $response->getBody()->getContents();
            $payloadbody = json_decode($payload);

            //Extracted data
            $extracted_data = [
                'symbol' => $payloadbody->symbol,
                'name' => $payloadbody->name,
                'usd' => $payloadbody->market_data->current_price->usd,
                'eur' => $payloadbody->market_data->current_price->eur,

            ];

            $raw = json_encode($extracted_data);

            // return json_encode($extracted_data);
            return view('zcashjson', compact('raw'));
        }
    }
}
