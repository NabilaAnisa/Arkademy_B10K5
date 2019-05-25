<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'data_programmers';
$databaseUsername = 'root';
$databasePassword = '#B!smillah';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>