<?php
require 'environment.php';

define("DEFAULT_URL", "http://localhost/PHPProject");
global $config;

$config = array();
if(ENVIRONMENT == "development"){
  $config['dbname'] = 'emotionanalyzer';
  $config['hostname'] = 'localhost:3306';
  $config['username'] = 'root';
  $config['password'] = '';
}else{
  $config['dbname'] = '###';
  $config['hostname'] = '###';
  $config['username'] = '###';
  $config['password'] = '###';
}

?>
