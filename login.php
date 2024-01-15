<?php 

$conn = mysqli_connect('localhost', 'test', '1111', 'test');

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select id from user where id='$id'";
$result = mysqli_query($conn, $sql);

$sql = "select * from user where id = '$id' and pw = '$pw'";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));

if($result){
    session_start();
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['user_pw'] = $result['pw'];
    echo "<script>alert('로그인이 완료되었습니다.')</script>";
    echo "<script>location.replace('./home.html')</script>";
}
else
    echo "<script>alert('로그인을 실패했습니다.')</script>";
    echo "<script>location.replace('./login.html')</script>";

mysqli_close($conn);
?>