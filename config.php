<?php
require 'environment.php';

define("DEFAULT_URL", "http://localhost:1234/Emotion-Analyzer/Emotion-Analyzer");
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
