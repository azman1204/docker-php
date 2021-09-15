<form action="task_handler.php" method="POST">
    <input type="text" name="task">
    <input type="submit" value="Simpan">
</form>

<?php
// list task
$conn = mysqli_connect('php-mysql_mysql_1', 'root', 'azman', 'testing') or die('Error connection');
$sql = "SELECT * FROM task";
$rs = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($rs)) {
    echo $row['task'] . '<br>';
}