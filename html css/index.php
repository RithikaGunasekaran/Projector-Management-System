<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projector Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <h1>Projector Management System</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>CLASSROOM</th>
                <th>BLOCK</th>
                <th>FLOOR</th>
                <th>WORKING</th>
                <th>COMPLAINTS</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "projector";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            

            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["CLASSROOM"] . "</td>
                    <td>" . $row["BLOCK"] . "</td>
                    <td>" . $row["FLOOR"] . "</td>
                    <td>" . $row["WORKING"] . "</td>
                    <td>" . $row["COMPLAINT"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href ='update'>Update</a>
                        <a class='btn btn-danger btn-sm'href= 'delete'>Delete</a>
                    </td>
            </tr>";
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>