<?php

define('MYSQL_HOST', 'mysql');
define('MYSQL_DATABASE', 'delegado');
define('MYSQL_USER', 'db_user');
define('MYSQL_PASSWORD', 'db_password');

$mysqli = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

?>