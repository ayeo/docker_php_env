<?php
try {
  $pdo = new PDO(
      'mysql:host=db;dbname=db_test',
      'db_test_user',
      'db_test_pass'
  );
  echo 'Mysql connection - ok';
} catch (Exception $e) {
  echo 'Connection error!!' . $e->getMessage();
}

phpinfo();