<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaResult</title>
</head>
<body>
    <?php 
        if(count($_GET['prefer']) == 0) {
            print 'Pick up sth as your fav';
        } else {
            print '<ul>';
            foreach($_GET['prefer'] as $key => $value){
                print "<li>$value</li>";
            }
            print '</ul>';
        }
    ?>
</body>
</html>