<?php
// phpinfo();
$conn = mysqli_connect('docker-php_mysql_1', 'root', 'azman', 'testing') or die('Error connection');
$task = $_POST['task'];
$sql = "INSERT INTO task(task) VALUES('$task')";
mysqli_query($conn, $sql);
header('location:task.php'); // redirect