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
        NUM1: <input type="number" step="0.001" name="num1"><br>
        Operator: <input type="text" name="op"><br>
        NUM2: <input type="number" name="num2"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    echo "Result is: ";
    if ($op == '+') {
        echo $num1 + $num2;
    } else if ($op == '-') {
        echo $num1 - $num2;
    } else if ($op == '*') {
        echo $num1 * $num2;
    } else if ($op == '/') {
        echo $num1 / $num2;
    } else {
        echo "Invalid Operator";
    }
    ?>
</body>

</html>