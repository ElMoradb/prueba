<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/menusito', 'menu::menusito');


$routes->get('/canchas','Canchas::index');
$routes->get('/canchas/add','Canchas::add');
$routes->post('/canchas/insert','Canchas::insert');
$routes->get('/canchas/edit/(:num)','Canchas::edit/$1');
$routes->post('/canchas/update/','Canchas::update/');
$routes->get('/canchas/delete/(:num)','Canchas::delete/$1');


$routes->get('/arbitros','Arbitro::index');
$routes->get('/arbitros/add','Arbitro::add');
$routes->post('/arbitros/insert','Arbitro::insert');
$routes->get('/arbitros/edit/(:num)','Arbitro::edit/$1');
$routes->post('/arbitros/update/','Arbitro::update/');
$routes->get('/arbitros/delete/(:num)','Arbitro::delete/$1');


$routes->get('/entrenadores','Entrenador::index');
$routes->get('/entrenadores/add','Entrenador::add');
$routes->post('/entrenadores/insert','Entrenador::insert');
$routes->get('/entrenador/edit/(:num)','Entrenador::edit/$1');
$routes->post('/entrenadores/update/','Entrenador::update/');
$routes->get('/entrenadores/delete/(:num)','Entrenador::delete/$1');


$routes->get('/equipos','Equipo::index');
$routes->get('/equipos/add','Equipo::add');
$routes->post('/equipos/insert','Equipo::insert');
$routes->get('/equipo/edit/(:num)','Equipo::edit/$1');
$routes->post('/equipos/update/','Equipo::update/');
$routes->get('/equipos/delete/(:num)','Equipo::delete/$1');


$routes->get('/jugadores','Jugador::index');
$routes->get('/jugadores/add','Jugador::add');
$routes->post('/jugadores/insert','Jugador::insert');
$routes->get('/jugadores/edit/(:num)','Jugador::edit/$1');
$routes->post('/jugadores/update/','Jugador::update/');
$routes->get('/jugador/delete/(:num)','Jugador::delete/$1');


$routes->get('/partidos','Partido::index');
$routes->get('/partidos/add','Partido::add');
$routes->post('/partidos/insert','Partido::insert');
$routes->get('/partidos/edit/(:num)','Partido::edit/$1');
$routes->post('/partidos/update/','Partido::update/');
$routes->get('/partidos/delete/(:num)','Partido::delete/$1');


