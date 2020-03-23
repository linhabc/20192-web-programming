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
        $gpa = $_POST['gpa'];

        $vehicle = $_POST['vehicle'];
        $comment = $_POST['comment'];

        print("<p>Hello $userName, class $class, univerity $university</p>");
        print("<p>You are a $gender</p>");
        print("<p>Your GPA: $gpa</p>");
        print("<p>You go to school by");
        foreach($vehicle as $items){
            print(" $items,");
        }
        print("</p>");
        print("Comment: $comment<br>");
    ?>
</body>
</html>