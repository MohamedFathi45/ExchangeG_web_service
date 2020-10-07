<?php

$dp_user = 'root';
$dp_password = "";
$dp_name = 'ExchangeG_App';

$dp = new PDO("mysql:host=localhost;dbname=$dp_name", $dp_user, $dp_password);
$dp->setAttribute(PDO::ATTR_EMULATE_PREPARES ,true);
$dp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY , true);
$dp->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

?>