<?php

$conn = new mysqli('localhost', 'root', '', 'companysysmanagement');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>