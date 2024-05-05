<!DOCTYPE html>
<html>
<head>
    <title>Team Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Team Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>CGPA</th>
        </tr>
        <?php
        $servername = "db";
        $username = "root";
        $password = "root";
        $dbname = "mydatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Select data from database
        $sql = "SELECT * FROM team";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["id"] . "</td><td>" . $row["age"] . "</td><td>" . $row["cgpa"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
