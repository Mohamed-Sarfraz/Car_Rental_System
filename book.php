<?php
session_start();
include 'db_connect.php';
if (!isset($_SESSION['user_id'])) { die("Login required!"); }

$car_id = $_POST['car_id'];
$user_id = $_SESSION['user_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$sql = "INSERT INTO bookings (user_id, car_id, start_date, end_date) VALUES ($user_id, $car_id, '$start_date', '$end_date')";
echo ($conn->query($sql)) ? "Booking successful!" : "Booking failed!";
?>
