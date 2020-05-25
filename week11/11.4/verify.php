<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify user</title>
</head>

<body>
    <?php 
        $host = 'localhost';
        $dbname = 'mvc';
        $username = 'root';
        $password = '';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $db = static::getDB();

            $stmt = $db->query('SELECT * FROM user');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "$results";

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    ?>


</body>

</html>