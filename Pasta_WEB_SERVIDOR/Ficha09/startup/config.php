<?php
require_once "./vendor/autoload.php";

define('APP_NAME', 'BD MANAGE');
define('INVALID_ACCESS_ROUTE', 'c=home&a=index');
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array('development' => 'mysql://root@localhost/appdb',)
);

});