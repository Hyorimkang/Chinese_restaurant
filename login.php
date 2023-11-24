<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select id from user where id='$id'";
$result = mysqli_query($conn, $sql);

if($id==$result) {echo "로그인 완료";
    //$sql = "select from chinese_menu(id, pw) values('$id', '$pw')";
    //$result = mysqli_query($conn, $sql);

    // if($result) 
    // else echo "로그인 실패";
}

mysqli_close($conn);
?>