<?php namespace App\Models; 
    use CodeIgniter\Model;

    class EventoModel extends Model {
        protected $table = 'evento';
        protected $primaryKey = 'id_evento';
        protected $returnType = 'object';
    }
?>