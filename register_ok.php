<?php
$con = mysqli_connect('localhost', 'root', 'zusqpqp1122*', 'site');

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
$userName = $_POST['userName'];

$query = "INSERT INTO USER_INFO(userID, userPassword, userName) VALUES(
'$userID',
'$userPassword',
'$userName'
)";

$stmt = mysqli_query($con, $query);

if($stmt) {
	header("Location: index.php");
} else {
	echo "fail to register";
}
?>

