<?php
$Item = $_POST['Item'];
$Cost = $_POST['Cost'];
$Weight = $_POST['Weight'];
$Quantity = $_POST['Quantity'];

$host = 'localhost:3306';
$user = 'root';
$passwd = '37550580';
$database = 'test';
$table_name = 'Products';

$connect = mysqli_connect($host, $user, $passwd, $database);
$query = "INSERT INTO $table_name VALUES
('0','$Item','$Cost','$Weight','$Quantity')";

print "The Query is <i>$query</i><br>";
// mysqli_select_db($connect, $database);
print '<br><font size="4" color="blue">';
if (!$connect) {
    die("Cannot connect to $server using $user");
} else {
    if ($connect->query($query)) {
        print "Insert into $database was successful!</font>";
    } else {
        print "Insert into $database failed!</font>";
    }
    mysqli_close($connect);
}
?></body>