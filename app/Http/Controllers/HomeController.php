<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('bienvenido');
    }

    public function generar()
    {
        $date=new DateTime();
        $view =
            '<h1>Hola papotico</h1><br>
            {{$date}} '

        ;




        $pdf = new Dompdf;
        $pdf->loadHtml($view);
        $pdf->render();
        $pdf->stream('nuevo_'.$date->format('Y-m-d H:i:s'));
    }
}
