<?php

$router->get('php_course', 'controllers/index.php');
$router->get('php_course/about', 'controllers/about.php');
$router->get('php_course/about/culture', 'controllers/about-culture.php');
$router->get('php_course/contact', 'controllers/contact.php');
$router->post('php_course/names', 'controllers/add-name.php');