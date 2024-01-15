<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'test');
$date = $_POST['date'];
$menu = $_POST['menu'];
$cnt = $_POST['cnt'];
$id = $_POST['id'];

$sql="insert into reservation('id', 'date', 'menu', cnt) values('$id', '$date', '$menu', '$cnt')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>alert(\"예약이 완료되었습니다.\")</script>";
}
mysqli_close($sql);
?>