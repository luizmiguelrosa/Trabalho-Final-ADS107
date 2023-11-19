<?php namespace App\Models; 
    use CodeIgniter\Model;

    class BlocoModel extends Model {
        protected $table = 'bloco';
        protected $primaryKey = 'id_bloco';
        protected $returnType = 'object';
    }
?>