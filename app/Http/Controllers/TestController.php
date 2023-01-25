<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        return "BG Aussi hein";
    }
    public function index1(){
        return response()->json([
            'mangues','kiwi','citron'
        ]);
    }
    public function index2(){
        return response()->json([
            'hasError' => false,
            'message' => "Plat du jour",
            'data' => [
                [
                    'id' => 1,
                    'libelle' => 'Foutou'
                ],
                [
                    'id' => 2,
                    'libelle' => 'Placali'
                ]
            ]
        ]);

      }






}
