<?php
ob_end_clean();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

session_start();

// setup slim configuration
$slim_config = require('configs/slim.php');

// setup dependencies injection
$di = new Slim\Container($slim_config);

// template engine
$di["viewExtensions"] = function($c){
    global $di;
    return new \extensions\plates\ExtForExample($di);
};

$di["template"] = function($c){
    return new \League\Plates\Engine('../app/views');
};

$di["template"]->loadExtension($di["viewExtensions"]);
$di["template"]->loadExtension(new \extensions\plates\JsExtension($di));

// database
$di["db"] = function($c){
    $db = require_once('configs/db.php');
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
      );

    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
        $db['user'], $db['pass'], $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

// flash message
$di["flash"] = function () {
    return new \Slim\Flash\Messages();
};


$app = new Slim\App($di);
$app->get('[/{params:.*}]', "Controllers\PageController:index")->setName('homePage');
$app->run();
?>