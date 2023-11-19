<?php namespace App\Controllers;

use App\Models\BlocoModel;
use App\Models\SalaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function bloco($bloco) : string {
        $blocoModel = new BlocoModel();
        $bloco = $blocoModel->find(str_replace('bloco', '', $bloco));
        
        if ($bloco) {
            $data = array(
                "bloco" => $bloco
            );

            return view('bloco', $data);
        } else {
            return 404;
        }
    }

    public function sala($bloco, $sala): string
    {
        $salaModel = new SalaModel();
        $sala = $salaModel->find($sala.str_replace('bloco', '', $bloco));

        if ($sala) {
            $data = array(
                "sala" => $sala
            );

            return view('sala', $data);
        } else {
            return false;
        }
    }
}
