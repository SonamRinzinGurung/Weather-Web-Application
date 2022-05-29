<?php

//Name: Sonam Rinzin Gurung    ID: 2059524

  //Set time zone to Nepal,Kathmandu
date_default_timezone_set('Asia/Kathmandu');

//Select weather data for specific parameters
// if data stored in table is older than 15 mins, new data is fetched from the OpenWeatherMap API

$querySql = "SELECT* FROM weather WHERE date_time >= DATE_SUB(NOW(),INTERVAL 10 MINUTE) ORDER BY date_time DESC limit 1";

$result = $connection->query($querySql);

 //if no records found, fetch fresh data from OpenWeatherMap API
if($result -> num_rows == 0)
{
  $url = 'https://api.openweathermap.org/data/2.5/weather?q=kathmandu&appid=ecdfd29636dd633569b375accdae2c52&units=metric';

  // Get weather data from OpenWeatherMap API and store in JSON object
  $data = file_get_contents($url);
  $json = json_decode($data, true);

  // Fetch required fields and store in variables
  $city = $json['name'];
  $date_time = date("Y-m-d H:i:s");
  $temperature = $json['main']['temp'];
  $weather_main = $json['weather'][0]['main'];
  $feels = $json['main']['feels_like'];
  $description = $json['weather'][0]['description'];
  $humidity = $json['main']['humidity'];
  $pressure = $json['main']['pressure'];
  $windspeed= $json['wind']['speed'];
  $winddegree = $json['wind']['deg'];
  $icon = $json['weather'][0]['icon'];

  // Insert data into MySql database table
  $querySql = "INSERT INTO weather (city,date_time,temperature , weather_main, feels,description,humidity,pressure,wind_speed,wind_degree,icon_code)VALUES('$city','$date_time', $temperature, '$weather_main', $feels, '$description',$humidity,$pressure,$windspeed,$winddegree,'$icon')";


  //Connection error handling
  if (!$connection -> query($querySql)) {
    echo("<h4>SQL error description: " . $connection -> error . "</h4>");
  }
}

?>
