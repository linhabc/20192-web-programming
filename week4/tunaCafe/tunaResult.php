<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaResult</title>
</head>

<body>
    <font size='4' color="blue">Tuna cafe result receive</font>
    <?php
    if (count($_GET['prefer']) == 0) {
        print 'Pick up sth as your fav';
    } else {
        print "<br />Your choice: <br />";
        print '<ul>';
        foreach ($_GET['prefer'] as $key => $value) {
            print "<li>$value</li>";
        }
        print '</ul>';
    }
    ?>
</body>

</html>