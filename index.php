<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="get">
        <input type="text" name="num1"><br>
        <input type="text" name="num2"><br>
        <input type="submit" value="Submit">
    </form>
    Sum is: <?php echo $_GET["num1"] + $_GET["num2"]; ?><br> -->

    <!-- Mad Libs Game:
    <hr>
    <form action="index.php" method="get">
        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="pluralNoun"><br>
        Celibrity: <input type="text" name="celibrity"><br>
        <input type="submit" value="Submit"><br>

        <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celibrity = $_GET["celibrity"];

        echo "Roses are $color </br>";
        echo "$pluralNoun Are Blue </br>";
        echo "I Love $celibrity </br>";
        ?>
    </form> -->

    <!-- <form action="index.php" method="post">
        <input type="password" name="pass"><br>
        <input type="submit" value="Submit">
    </form>
    Password is: <?php echo $_POST["pass"]; ?><br> -->

    <form action="index.php" method="post">
        Rose:<input type="checkbox" name="flowers[]" value="rose"><br>
        Tulip:<input type="checkbox" name="flowers[]" value="tulip"><br>
        Joba:<input type="checkbox" name="flowers[]" value="joba"><br>
        ID:<input type="number" name="id"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    $ID = $_POST["id"];
    $flowers = $_POST["flowers"];
    echo "$flowers[1] </br>";
    $grades = array(1 => 'a+', 2 => 'b+');
    echo count($grades);
    echo $grades[$ID];
    ?>

</body>

</html>