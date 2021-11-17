<?php

$hostLiveN='localhost';
$userLiveN='root';
$passLiveN='';
$bdLiveN='semedico';

$hostLive='localhost';
$userLive='root';
$passLive='';
$bdLive='superpa1_semedico';


$conexion = mysqli_connect($hostLiveN, $userLiveN, $passLiveN, $bdLiveN); 
if (!$conexion) { 
    die('Could not connect to MySQL: ' . mysqli_error($conexion)); 
} 
?>