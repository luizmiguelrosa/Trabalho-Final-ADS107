<?php namespace App\Models; 
    use CodeIgniter\Model;

    class LocalModel extends Model {
        protected $table = 'local';
        protected $primaryKey = 'id_local';
        protected $returnType = 'object';
    }
?>