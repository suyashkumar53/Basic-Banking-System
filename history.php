<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "css/history.css">
</head>
<body>

    <div class="his">Transaction History</div>
    <table>
    <tr>
    <th>Sender's Name</th>
    <th>Reciever's Name</th>
    <th>Amount</th>
    <th>Date and Time</th>
    </tr>

    <?php
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "Spark";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }


        $sql = "SELECT * FROM `transfer`";
        $result = mysqli_query($conn, $sql);

        // Find the number of records returned
        $num = mysqli_num_rows($result);

        // Display the rows returned by the sql query
        if($num> 0){


            // We can fetch in a better way using the while loop
            while($row = mysqli_fetch_assoc($result)){
                // echo var_dump($row);
                echo "<tr>";
                echo "<td>" . $row["Sender"]. "</td>
                <td>" . $row["Receiver"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Date"] . "</td>";
                 echo "</tr>";
        }
        echo "</table>";
        }
    ?>

</body>
</html>