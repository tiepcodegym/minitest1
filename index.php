<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="inp">
    <input type="submit" value="Gửi">
</form>
<?php
$arr =[1,2,3,7,11,12,14,10,15,9,33,22,66];
if ($_SERVER["REQUEST_METHOD"] == "POST")
$num = $_REQUEST["inp"];
array_push($arr,$num);
sort($arr);
print_r($arr);

?>
</body>
</html>

