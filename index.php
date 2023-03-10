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
        Length: <input type="number" name="length"><br>
        Width: <input type="number" name="width"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $length = $_POST['length'];
    $width = $_POST['width'];
    function getArea($length, $width)
    {
        return $length * $width;
    }
    echo "The Area is:";
    echo getArea($length, $width);
    ?>
</body>

</html>