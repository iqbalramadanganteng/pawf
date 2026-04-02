$routes->get('calculator', 'Calculator::index'); // Route ke controller Calculator
// Dokumentasi: Route ini mengarahkan ke controller Calculator
// agar bisa diakses melalui http://localhost/calculator
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route untuk kalkulator
$routes->get('calculator', 'Calculator::index'); // Route ke controller Calculator
