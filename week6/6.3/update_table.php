<?php
$host = 'localhost:3306';
$user = 'root';
$passwd = '37550580';
$database = 'test';
$table_name = 'Products';
$connect = mysqli_connect($host, $user, $passwd);
print '<font size="5" color="blue">';
print "Update Results for Table
$table_name</font><br>\n";
$query = "UPDATE $table_name
SET Numb = Numb-1
WHERE (Product_desc = '$Product')";
print "The query is <i> $query </i> <br><br>\n";
mysqli_select_db($database, $connect);

$results_id = mysqli_query($query, $connect);
if ($results_id) {

    Show_all($connect, $database, $table_name);
} else {

    print "Update=$query failed";
}
mysqli_close($connect);

function Show_all($connect, $database, $table_name)
{

    $query = "SELECT * from $table_name";

    $results_id = mysqli_query($query, $connect);

    print '<table border=1><th> Num </th>
    <th>Product</th><th>Cost</th>
    <th>Weight</th><th>Count</th>';

    while ($row = mysqli_fetch_row($results_id)) {

        print '<tr>';

        foreach ($row as $field) {

            print "<td>$field</td> ";
        }

        print '</tr>';
    }
}
