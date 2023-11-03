<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');
$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$gender = $_POST['gender'];
$nikname = $_POST['nikname'];
$email = $_POST['email'];

$sql = "insert into user(name, id, pw, gender, nikname, email) values('$name','$id','$pw', '$gender', '$nikname', '$email')";
$result = mysqli_query($conn, $sql);

if($result) echo "회원가입 완료";
else echo "회원가입 실패";

mysqli_close($conn);
?>