<?php
require_once("autoloader.php");
$params = [
    'defPage' => 'home'
];

\hyph\Hyph::getApp($params)->start();