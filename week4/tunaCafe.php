<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaCafe</title>
</head>
<body>
    <font size="4" color="blue">Welcome to TunaCafe</font>
    <form action="./tunaResult.php" method="get">
        <?php 
            $menu = array('Tuna0', 'Tuna1', 'Tuna2', 'Tuna3');
            $bestseller = 2;
            print ' please indicate your favorite dishes<br/>';

            for($i=0; $i<count($menu); $i++){
                print "<input type=\"checkbox\" value=$menu[$i] name =\"prefer[]\"> $menu[$i]";
                if($i == $bestseller)
                    print('<font color="red"> Our best seller</font>');
                print('<br/>');
            }
        ?>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
</body>
</html>