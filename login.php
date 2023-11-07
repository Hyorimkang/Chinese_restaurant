<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select id from where id='$id'";
$result = mysqli_query($conn, $sql);

if($id!=$result) {
    $sql = "insert into user(name, id, pw, gender, nikname, email) values('$name','$id','$pw', '$gender', '$nikname', '$email')";
    $result = mysqli_query($conn, $sql);

    if($result) echo "회원가입 완료";
    else echo "회원가입 실패";
}
else echo "중복된 아이디로 회원가입이 불가능 합니다.";

mysqli_close($conn);
?>