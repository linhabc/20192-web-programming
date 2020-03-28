<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coin flip</title>
</head>
<body>
    <font size="4" color="blue">Please pick head or tails!</font>
    <form action="./HeadOrTail.php" method="post">
        <?php 
            print '<input type="radio" name="tail" id="tail"> Tail';
            print '<input type="radio" name="head" id="head"> Head';
            print '<br />'
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Restart">

    </form>
</body>
</html>