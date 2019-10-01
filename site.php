<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- // $phrase = 'Giraffe Academy';
    // echo substr($phrase, 8, 3); -->

    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name">
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>

    Your name is <?php echo $_GET["name"] ?>
    <br>
    Your age is <?php echo $_GET['age'] ?> -->

    <!-- <form action="site.php" method="get">
        <input type="number" name='num1'>
        <input type="number" name='num2'>
        <input type="submit">
    </form>
        
    <?php echo $_GET['num1'] + $_GET['num2'] ?> -->

<!-- MAD LIBS -->
    <!-- <form action="site.php" method="get">
        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="pluralNoun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit">
    </form>
    <br><br>
    <?php
        $color = $_GET['color'];
        $pluralNoun = $_GET['pluralNoun'];
        $celebrity = $_GET['celebrity'];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?> -->

<!-- Arrays -->
    <?php 
        $friends = array('kevin', 'karen', 'oscar', 'jim');
        $friends[4] = "Dwight";
        echo count($friends);
    ?>


</body>
</html>