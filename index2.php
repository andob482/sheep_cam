<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="GET" action="index2.php">
    <input type="submit" value="on" name="id">
    <input type="submit" value="off" name="id">
</form>

   <?php
if (isset($_GET['id'])){
    $status = $_GET['id'];

    switch ($status) {
        case 'on':
            echo "Du tryckte ON";
            shell_exec("var/www/html/functions/test.sh");
            break;
        case 'off':
            echo "Du tryckte OFF";
            shell_exec("echo off 2>&1");
            break; 
}}

?>
    

</body>
</html>