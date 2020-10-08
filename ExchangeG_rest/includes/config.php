<?php

$dp_user = 'root';
$dp_password = '';
$dp_name = 'ExchangeG_App';

$link = mysqli_connect('localhost',$dp_user,$dp_password);
mysqli_select_db($link,'exchangeg');

?>