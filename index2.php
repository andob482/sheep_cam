<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
   chdir('var/www/html');
    if (isset($_POST['call'])){
    shell_exec('./test.sh');
    echo "Du klarade det";
    } else {
        echo "Misslyckande";
    }
    echo getcwd();
    ?>
    <form method="POST">
    <button name="call">Test</button>
    </form>

</body>
</html>