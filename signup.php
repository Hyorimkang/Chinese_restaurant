<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');
$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$gender = $_POST['gender'];
$nikname = $_POST['nikname'];
$email = $_POST['email'];

$sql = "select * from where id = '$id'";
$result = mysqli_query($conn, $sql);

if(!$result) {
    $sql = "insert into user(name, id, pw, gender, nikname, email) values('$name','$id','$pw', '$gender', '$nikname', '$email')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('예약이 완료되었습니다.')</script>";
        echo "<script>location.replace('./login.html')</script>";
    }
    else echo "회원가입 실패";
}
else echo "중복된 아이디로 회원가입이 불가능 합니다.";

mysqli_close($conn);
?>