<?php namespace App\Models; 
    use CodeIgniter\Model;

    class SalaModel extends Model {
        protected $table = 'sala';
        protected $primaryKey = 'id_sala';
        protected $returnType = 'object';
    }
?>