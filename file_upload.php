<?php
$upload = './uploads/';
if(!is_dir($upload)) mkdir($upload);

$name = $_POST['name'];
$price = $_POST['price'];
$note = $_POST['note'];

$user_file = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$upload_file = $upload.basename($_FILES['image']['name']);

//폴더에 파일이 있는지
if(move_uploaded_file($tmp_name, $upload_file)) echo "폴더에 업로드 완료";
else echo "실패";

$conn = mysqli_connect('localhost', 'test', '1111', 'test');
$sql = "insert into chinese_menu(name, price, description, img) values('$name', $price, '$note', '$upload_file')";
$result = mysqli_query($conn, $sql);

if($result) echo "db업로드완료";
else echo "실패";

mysqli_close($conn);
?>