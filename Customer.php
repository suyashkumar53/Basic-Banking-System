<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Customer Details</title>
  <link rel="stylesheet" href="css/customer.css">
</head>
<body>
  <header>
    <h1>Customer Details</h1>
  </header>
  <table>
    <thead>
      <h1></h1>
    </thead>
    <tr><th>S.no</th><th> Name</th><th>Email</th><th>Balance</th><th>Transfer</th></tr>

    <?php
{
// Set cOnnection variables
$server="localhost";
$username= "root";
$password = "";
$database = "Spark";

//cReate database connection
$con = mysqli_connect($server, $username, $password,$database);

//Check for connection success
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "Success connecting to the db";

//$sql="INSERT INTO `customers` ( `Name`, `Email`, `Balance`) VALUES ('Rohan', 'Rohan@gmail.com', '50000')";

$sql= "Select * from `customers`";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);


// Display the rows returned by the sql query
if($num> 0){


    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);


        echo "<tr>";
    echo '<form method ="post" action = "Details.php ">';
    echo "<td>" . $row["S.No"]. "</td><td>" . $row["Name"] . "</td>
    <td>" . $row["Email"] . "</td><td>" . $row["Balance"] . "</td>";
    echo "<td ><a href='Details.php?user={$row["Name"]}&message=no' type='button' name='user'  id='users1' ><span>Transfer </span></a></td>";
    echo "</tr>";
}
echo "</table>";
}
//close database connection
$con->close();

}
?>
</table>
</body>
</html>

