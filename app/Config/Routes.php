<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// main routes
$routes->get('/main', 'MainController::main');

// dashboard routes
$routes->get('dashboard', 'DashboardController::index');

// checklist routes
$routes->get('checklist', 'ChecklistController::index');
$routes->post('save_checklist', 'ChecklistController::saveChecklistRow');
$routes->get('get_checklist', 'ChecklistController::getFilteredMaintenance');

// maintenance routes
$routes->get('maintenance', 'MaintenanceController::maintenance');
$routes->post('addBuilding', 'MaintenanceController::addBuilding');
$routes->post('addItem', 'MaintenanceController::addItem');
$routes->post('addAreaCode', 'MaintenanceController::createAreaCode');
$routes->post('createUser', 'MaintenanceController::createUser');
$routes->post('addFinding', 'MaintenanceController::addFinding');
$routes->post('addPriorityLevel', 'MaintenanceController::addPriorityLevel');
$routes->post('add_maintenance', 'MaintenanceController::addMaintenance');
$routes->post('update_area/(:num)', 'MaintenanceController::updateArea/$1');

// logout routes
$routes->post('/', 'LoginController::logout');

// login routes
$routes->post('login', 'LoginController::login');

// checksheet routes
$routes->get('checksheet', 'ChecksheetController::index');
$routes->get('fetch_checksheet_data', 'ChecksheetController::fetchData');