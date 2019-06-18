<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {

    public function index(Request $request) {
        $series = [
            'Vikins',
            'Lost',
            'Maniacs'
        ];
        
        return view('series.index', [
            'series' => $series
        ]);
        /* Ou podendo ser assim, quando CHAVE éo mesmo que o VALOR
        return view('series.index', compact('series'));
        */
    }
}
