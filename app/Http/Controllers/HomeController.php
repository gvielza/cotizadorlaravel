<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function generar()
    {
        return view('generador');
    }

    public function imprimir()
    {
        $date = new DateTime();
        $view =
            '<h1>Hola papotico</h1><br>
            ';

        $pdf = new Dompdf;
        $pdf->loadHtml($view);
        $pdf->render();
        $pdf->stream('nuevo_' . $date->format('Y-m-d H:i:s'));
    }
    public function consumir()
    {
        //api de gatos
        $url = 'https://api.thecatapi.com/v1/images/search?mime_types=jpg,png';
        $data = file_get_contents($url);

        $json = json_decode($data, true);





        return view('miapi', ['gatos' => $json]);
    }
}
