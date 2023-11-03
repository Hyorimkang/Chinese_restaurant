<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');

$reg = date('Y-m-d');
echo $reg;

$sql = "insert into test(reg_date) values('$reg')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>
