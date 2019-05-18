<?php

$router->get('php_course', 'PagesController@home');
$router->get('php_course/about', 'PagesController@about');
$router->get('php_course/contact', 'PagesController@contact');

$router->get('php_course/users', 'UsersController@index');
$router->post('php_course/users', 'UsersController@store');