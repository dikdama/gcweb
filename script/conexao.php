<?php
// Dados do banco
$connection_string = 'DRIVER={SQL Server};SERVER=MY-PC;DATABASE=gc';

$user = 'admim';
$pass = 'admin';

$connection = odbc_connect( $connection_string, $user, $pass ) or die('erro');
?>