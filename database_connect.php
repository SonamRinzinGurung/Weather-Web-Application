<?php

//Name: Sonam Rinzin Gurung    ID: 2059524

// Establish a connection between php page and MySql
$connection = new mysqli("localhost","root","","db2059524");

//if is database not found, new database and table are created
if($connection->connect_error){
  $connection = new mysqli("localhost","root","");
  $querySql = "CREATE DATABASE db2059524";
  $connection->query($querySql);
  $connection->select_db('db2059524');
  $querySql = "CREATE TABLE weather (city varchar(50),date_time datetime, temperature float, weather_main varchar(10),feels float, description varchar(50), humidity int,pressure int, wind_speed float, wind_degree int, icon_code varchar(10))";
  $connection->query($querySql);
}

//linking 2059524_data_import.php file to this php file
include('2059524_data_import.php');

//Select weather data for specific parameters
$querySql = "SELECT* FROM weather WHERE date_time >= DATE_SUB(NOW(),INTERVAL 10 MINUTE) ORDER BY date_time DESC limit 1";

$result = $connection->query($querySql);

//converting data coming from database to array form
$row = $result -> fetch_array();

//converts data to JSON format and prints on php page
print json_encode($row);

//cleaning up
$result -> free_result();
$connection -> close();
?>
