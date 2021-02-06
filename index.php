<?php
$str = $_POST["name"];
$ret=file_get_contents('War_and_Peace.txt');
echo $str1=preg_match_all('/\bСударь\b/iu','$ret', $m);
var_dump($m);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <textarea rows="20" cols="50" name="name" ></textarea>
    <input type="submit" value="OK">

</form>

</body>
</html>