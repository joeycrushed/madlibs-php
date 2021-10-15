<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Site</title>
</head>
<body>



<?php
    $cafe = "Giraffe Cafe";
    $name = "Joe";
    $newname = str_replace("Giraffe", "Crocodile", $cafe);
    echo "<h1>$newname</h1>";
    echo "<hr>";
    echo "<p>What's going on? Welcome to $newname </p>";
    echo "<p>First, let me get a few details about yourself</p>"
?>

    <form action="site.php" method="get">
       Name: <input name="name" type="text">
       <input type="submit">
       Age: <input type="text" name="age">
       <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"]?> and you are <?php echo $_GET["age"]?> years old.
    <br>

    <?php echo "<p>Brilliant that's great. Your total bill is:</p>"?>

    <form action="site.php" method="get">
        Item 1: <input type="number" name="item1">
        Item 2: <input type="number" name="item2">
        <input type="submit">
    </form>
    <br>

    Total : <?php echo $_GET["item1"] + $_GET["item2"]?>

    <h1>Mad Libs</h1>
    <hr>
        <form action="site.php" method="get">
            First Word: <input type="text" name="firstword"><br>
            Second Word: <input type="text" name="secondword"><br>
            Third Word: <input type="text" name="thirdword"><br>
            FourthWord: <input type="text" name="fourthword"><br>
            Fifth Word: <input type="text" name="fifthword"><br>
            <input type="submit">
        </form>

    <?php 
        $firstword = $_GET["firstword"];
        $secondword = $_GET["secondword"];
        $thirdword = $_GET["thirdword"];
        $fourthword = $_GET["fourthword"];
        $fifthword = $_GET["fifthword"];
        echo "One day I went to the beach and it was really $firstword. <br>";
        echo "I had a quick look out to sea and saw a $secondword. <br>";
        echo "The $secondword gave me a $thirdword & I was quite shocked! <br>";
        echo "Due to the $secondword's complete ignorance I decided I would $fourthword. <br>";
        echo "The $secondword then did a little $fifthword and left.<br>";
    ?>




    
   




</body>
</html>