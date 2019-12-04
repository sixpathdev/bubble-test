<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{

    public function getbitcoindata()
    {
        //intialize the Guzzle client instance
        $clientApi = new Client();

        //send get request to api
        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/bitcoin');
        //get statuscode
        $statusCode = $response->getStatusCode();
        //Verify response is sucess
        if ($statusCode == 200) {
            //get body of the request
            $payload = $response->getBody()->getContents();
            //decode the json data
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
        //intialize the Guzzle client instance
        $clientApi = new Client();

        //send get request to api
        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/bitcoin');
        //get statuscode
        $statusCode = $response->getStatusCode();
        //Verify response is sucess
        if ($statusCode == 200) {
            //get body of the request
            $payload = $response->getBody()->getContents();
            //decode the json data
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
        //intialize the Guzzle client instance
        $clientApi = new Client();
        //send get request to api
        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/zcash');
        //get statuscode
        $statusCode = $response->getStatusCode();
        //Verify response is sucess
        if ($statusCode == 200) {
            //get body of the request
            $payload = $response->getBody()->getContents();
            //decode the json data
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
        //intialize the Guzzle client instance
        $clientApi = new Client();
        //send get request to api
        $response = $clientApi->request('GET', 'https://api.coingecko.com/api/v3/coins/zcash');
        //get statuscode
        $statusCode = $response->getStatusCode();

        //Verify response is sucess
        if ($statusCode == 200) {
            //get body of the request
            $payload = $response->getBody()->getContents();
            //decode the json data
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
