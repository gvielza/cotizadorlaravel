<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function show()
    {
        $url = 'https://api.thecatapi.com/v1/images/search?mime_types=jpg,png';
        $data = file_get_contents($url);
        $json = json_decode($data, true);
        return view('cat', ['cat' => $json[0]]);
    }

}
