<?php

namespace App\Controllers;

use App\Models\PedidoModel;

class Pedido extends BaseController
{
    protected $pedidosModel;
    private $carrinho = [];
    public function __construct()
    {
        $this->pedidosModel = new PedidoModel();
    }

    public function novo()
    {
        echo view('components/header', [
            "titulo" => "Dashboard"
        ]);
        echo view('components/navbar');

        $pedidos = $this->pedidosModel->findAll();

        echo view('listaProdutos', [
            'pedidos' => $pedidos,
            'carrinho' => $this->carrinho
        ]);


        echo view('components/footer');
    }

    public function listarCarrinho() {
        echo view('components/header', [
            "titulo" => "Dashboard"
        ]);
        echo view('components/navbar');

        if (count($_POST)) {
            $carrinho = json_decode($_POST['carrinho_storage']);
            echo '<pre>';
            print_r($carrinho);
            echo '</pre>';
            $this->carrinho = $this->pedidosModel->find($carrinho);
            
            for ($i = 0; $i < count($this->carrinho); $i++) {
                echo '<pre>'; 
                echo $this->carrinho[$i]->codigo;

                for ($j = 0; $j < count($carrinho); $j++) {
                    if ($this->carrinho[$i]->codigo == $carrinho[$j]) {
                        echo ' - ' . $carrinho[$j];
                        $this->carrinho[$i]->quantidade = $carrinho[$j]->quantidade;
                    }
                }
            }
        } else {
            $this->carrinho = [];
        }

        echo view('listaCarrinho', [
            'carrinho' => $this->carrinho
        ]);

        echo view('components/footer');
    }
}
