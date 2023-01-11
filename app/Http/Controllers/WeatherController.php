<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function show()
    {
 $url = 'https://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=1da75653471795da51c183349548f029
';
        $data = file_get_contents($url);
        $json = json_decode($data, true);
        return view('weather', ['weather' => $json]);
    }
}
