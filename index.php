<?php
require 'vendor/autoload.php';

$f3 = Base::instance();

$f3->config('settings/config.ini');
$f3->config('settings/routes.ini');

$f3->run();
