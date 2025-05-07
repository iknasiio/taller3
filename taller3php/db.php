<?php
$conn = new mysqli('localhost', 'root', '', 'blog_ignacio');
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
