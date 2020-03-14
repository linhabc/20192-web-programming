<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form receiver</title>
</head>
<body>
    <p>Thank you, got your input</p>
    <?php 
        $userName = $_POST['userName'];
        $class = $_POST['class'];
        $university = $_POST['university'];
        $gender = $_POST['gender'];
        $vehicle = $_POST['vehicle'];

        print("<p>Hello $userName, class $class, univerity $university</p>");
        print("<p>You are a $gender</p>");
        print("<p>You go to school by");
        for($x=0; $x<count($vehicle); $x++){
            print(" $vehicle[$x],");
        }
        print("</p>");
    ?>
</body>
</html>