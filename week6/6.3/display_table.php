<?php
$host = 'localhost:3306';
$user = 'root';
$passwd = '37550580';
$database = 'test';
$table_name = 'Products';

$connect = mysqli_connect($host, $user, $passwd, $database);
print '<font size="5" color="blue">';
print "$table_name Data</font><br>";
$query = "SELECT * FROM $table_name";
print "The query is <i>$query </i><br>";
mysqli_select_db($connect, $database);
$results_id = mysqli_query($connect, $query);

if ($results_id) {
    print '<table border=1>';
    print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
    while ($row = mysqli_fetch_row($results_id)) {
        print '<tr>';
        foreach ($row as $field) {
            print "<td>$field</td> ";
        }
        print '</tr>';
    }
} else {
    die("Query=$query failed!");
}

mysqli_close($connect);
?></body>