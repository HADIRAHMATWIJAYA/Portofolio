<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/resume', 'Resume::index');
$routes->get('/projects', 'Projects::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/contact', 'Contact::index');
$routes->post('/contact/submit', 'Contact::submit');
$routes->get('/contact/list', 'Contact::list');
