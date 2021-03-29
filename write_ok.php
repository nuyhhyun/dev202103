<?php
$con = mysqli_connect('localhost', 'root', 'zusqpqp1122*', 'site');

$title = $_POST['title'];
$contents = $_POST['contents'];

$query = "INSERT INTO POST_INFO(title, contents) VALUES('$title', '$contents')";

$stmt = mysqli_query($con, $query);

if($stmt) {
	echo "Title : ", $title,"<br>", "Contents : ", $contents, "<br>";
} else {
	echo "fail to upload";
}
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="delete.php" method="post">
			
	</body>
</html>
