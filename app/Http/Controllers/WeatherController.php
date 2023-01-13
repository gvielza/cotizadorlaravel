<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Stevebauman\Weather\Weather;

class WeatherController extends Controller
{

    public function index(){

        return view('weather');
    }
    public function search(Request $request)
    {
        $data=$request->validate([
            'city'=>'required',
        ]);
        $city=$data['city'];
        $key=config('services.own.key');

        $response=Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=".$key)
        ->json();


        if($response['cod'] == "200") {

            $weather = $response['weather'][0]['description'];
            $main = $response['weather'][0]['main'];
            $temp = $response['main']['temp'] - 273;
            $name = $response['name'];
            $country = $response['sys']['country'];
            $ok = $response['cod'];

            return view('weather', compact('weather', 'main', 'temp', 'name', 'country', 'ok'));
          } else {
            $notFound = true;
          return view('weather', compact('notFound'));
          }
        }



}
