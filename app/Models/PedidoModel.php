<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class PedidoModel extends Model {
        protected $table = 'produtos';
        protected $primaryKey = 'codigo';

        protected $allowedFields = [
            'produto',
            'fabricante'
        ];

        protected $returnType = 'App\Entities\Pedido';
    }

?>