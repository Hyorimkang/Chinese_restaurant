<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');
$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "insert into user(name, id, pw) values('$name','$id','$pw')";
$result = mysqli_query($conn, $sql);

if($result) echo "회원가입 완료";
else echo "회원가입 실패";

mysqli_close($conn);
?>