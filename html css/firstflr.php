<!DOCTYPE html>
<html>
<head>
    <title>PHP SQL Example</title>
</head>
<body>
    <h1>PHP SQL Example</h1>
    
    <?php
    include 'database.php';
    $result = mysqli_query($conn, "SELECT * FROM students");
    
    echo "<ul>";
    while($row = mysqli_fetch_array($result)) {
        echo "<li>" . $row['CLASSROOM'] . "</li>";
    }
    echo "</ul>";
    
    mysqli_close($conn);
    ?>
</body>
</html>
