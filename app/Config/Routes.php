<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/pedidos/novo', 'Pedido::novo');

$routes->get('/pedidos/carrinho/', 'Pedido::listarCarrinho');
$routes->post('/pedidos/carrinho/', 'Pedido::listarCarrinho');


