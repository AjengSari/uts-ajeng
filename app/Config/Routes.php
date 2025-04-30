<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login & Logout
$routes->get('/', 'AuthController::login');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

// Generate Password
$routes->get('password', 'AuthController::generatePassword');

// Untuk Admin
$routes->get('admin-dashboard', 'DashboardController::index');

// Untuk User
$routes->get('home', 'Home::index');

// Produk dan Keranjang (Wajib login)
$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);
