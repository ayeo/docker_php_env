<?php
try 
{
  $pdo = new PDO('mysql:host=db;dbname=ayeo_docker', 'root', 'root');
  echo 'Mysql connection - ok';
} 
catch (Exception $e)
{
  echo 'Connection error!!' . $e->getMessage();
}

phpinfo();