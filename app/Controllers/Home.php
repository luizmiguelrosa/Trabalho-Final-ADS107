<?php namespace App\Controllers;

use App\Models\BlocoModel;
use App\Models\EventoModel;
use App\Models\LocalModel;
use App\Models\SalaModel;

use CodeIgniter\I18n\Time;

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

    public function interno($bloco, $especificado): string
    {
        if (strpos($especificado, "sala") === 0) {
            $salaModel = new SalaModel();
            $sala = $salaModel->find($especificado.str_replace('bloco', '', $bloco));

            if ($sala) {
                return view('sala', ["sala" => $sala]);
            } else {
                return view('errors/html/error_404', ["message" => 'Não existe essa página']);
            }
        } elseif (strpos($especificado, "evento") === 0) {
            $eventoModel = new EventoModel();
            $evento = $eventoModel->find(str_replace('evento', '', $especificado));

            if ($evento) {
                $salaModel = new SalaModel();
                $sala = $salaModel->find($evento->sala_id);

                $time = Time::parse($evento->data_evento);
                return view('evento', ["evento" => $evento, "sala" => $sala, "time" => $time]);
            } else {
                return view('errors/html/error_404', ["message" => 'Não existe essa página']);
            }
        } else {
            $localModel = new LocalModel();
            $local = $localModel->find($especificado);

            if ($local) {
                return view('local', ["local" => $local]);
            } else {
                return view('errors/html/error_404', ["message" => 'Não existe essa página']);
            }
        }
    }
}
