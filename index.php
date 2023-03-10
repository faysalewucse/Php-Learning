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
        Enter Your Grade: <input type="text" name="grade"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    $grade = $_POST['grade'];
    switch ($grade) {
        case "A":
            echo "Great Result.";
            break;
        case "B":
            echo "Good Result.";
            break;
        case "C":
            echo "Medium Result.";
            break;
        case "D":
            echo "Poor Result.";
            break;
        case "F":
            echo "You Fail. SO Sad";
            break;
        default:
            echo "Invalid Grade";
    }
    ?>
</body>

</html>