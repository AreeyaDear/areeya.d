<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 
$routes->get('/ContextVersion', 'Home::indexVersion');
$routes->get('/history', 'HistoryController::index');
$routes->get('/interestedParty', 'InterestedPartyController::index');
$routes->get('/ISMSScope', 'Home::indexISMSScope');
$routes->get('/ISMSProcess', 'Home::indexISMSProcess');
$routes->get('/LeadershipandCommitment', 'Home::indexleadershipandcommitment');
$routes->get('/ISPolicy', 'Home::indexISPolicy');
