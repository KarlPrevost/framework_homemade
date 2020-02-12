<?php

// ROUTE APP
Router::connect('/', ['controller' => 'AppController', 'action' => 'index']);

// ['/'] ------> AppController -----> 'index()';

// ROUTE USER
Router::connect('/add', ['controller' => 'UserController', 'action' => 'add']);

// ['/add'] ----> UserController ------> add()

Router::connect('/index', ['controller' => 'UserController', 'action' => 'index']);