<?php
include_once "Classes/Stack.php";

$numList = new Stack(10);
$numList->push(1);
$numList->push(2);
$numList->push(3);
$numList->push(4);
$numList->push(5);


echo $numList->pop();
echo "<pre>";
echo $numList->pop();
echo "<pre>";
echo $numList->pop();

$numList->push(6);
$numList->push(7);


echo "<pre>";
var_dump($numList->isEmpty());

echo $numList->pop();
echo "<pre>";
echo $numList->pop();
echo "<pre>";
echo $numList->pop();
echo "<pre>";
echo $numList->pop();


echo "<pre>";
var_dump($numList->isEmpty());


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Cài đặt cấu trúc Stack</title>
</head>
<body>

</body>
</html>
