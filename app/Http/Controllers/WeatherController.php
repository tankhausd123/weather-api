<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    function index()
    {
        $client = new Client();
        $res = $client->get('http://api.openweathermap.org/data/2.5/weather?id=1581130&appid=ddab9161051d832dfbfead0647014d0d');
        $data = $res->getBody();
        $dataJson = $data->getContents();
        $weather =json_decode($dataJson);
//        dd($weather);
        $humidity = $weather->main->humidity;
        $cloud = $weather->clouds->all;
        if ($cloud > 0){
            $cloudStatus = 'Mostly Cloudy';
        }else
            $cloudStatus = 'Little Cloudy';
        $nameCity = $weather->name;
        $temp = $weather->main->temp-273.15;

        return view('weather.index', compact('humidity', 'cloudStatus', 'nameCity', 'temp'));
    }
}
