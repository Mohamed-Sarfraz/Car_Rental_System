<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM cars");
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>
