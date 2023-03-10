<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        Enter Number: <input type="number" name="num"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    $num = $_POST['num'];
    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "$num x $i = $result<br>";
    }
    ?>
</body>

</html>