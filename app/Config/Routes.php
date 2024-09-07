<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('productos','Productos::index');
$routes->get('productos/nuevo','Productos::nuevo');
$routes->post('productos/insertar','Productos::insertar');
$routes->get('productos/eliminados','Productos::eliminados');
$routes->get('productos/editar/(:num)','Productos::editar/$1');
$routes->post('productos/actualizar', 'Productos::actualizar');
$routes->get('productos/eliminar/(:num)','Productos::eliminar/$1');
$routes->get('productos/reingresar/(:num)','Productos::reingresar/$1');


$routes->get('unidades','Unidades::index');
$routes->get('unidades/nuevo','Unidades::nuevo');
$routes->post('unidades/insertar','Unidades::insertar');
$routes->get('unidades/eliminados','Unidades::eliminados');
$routes->get('unidades/editar/(:num)','Unidades::editar/$1');
$routes->post('unidades/actualizar', 'Unidades::actualizar');
$routes->get('unidades/eliminar/(:num)','Unidades::eliminar/$1');
$routes->get('unidades/reingresar/(:num)','Unidades::reingresar/$1');

$routes->get('categorias','Categorias::index');
$routes->get('categorias/nuevo','Categorias::nuevo');
$routes->post('categorias/insertar','Categorias::insertar');
$routes->get('categorias/eliminados','Categorias::eliminados');
$routes->get('categorias/editar/(:num)','Categorias::editar/$1');
$routes->post('categorias/actualizar', 'Categorias::actualizar');
$routes->get('categorias/eliminar/(:num)','Categorias::eliminar/$1');
$routes->get('categorias/reingresar/(:num)','Categorias::reingresar/$1');
