<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"Spark");
if(!$con){
    die("Connection failed");
} 


$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST["reciever"];
$amount=$_POST["amount"];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Transfers</title>
<body>



<?php

$sql = "SELECT Balance FROM customers WHERE name='$sender'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
          while($row = $result->fetch_assoc()) {
 if($amount>$row["Balance"] or $row["Balance"]-$amount<100){
  $location='Details.php?user='.$sender;
  header("Location: $location&message=transactionDenied");
 }
else{
    $sql = "UPDATE `customers` SET Balance=(Balance-$amount) WHERE Name='$sender'";


if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error in updating record: " . $con->error;
}
 }

  }
} else {
  echo "0 results";
} 

if($flag==true){
$sql = "UPDATE `customers` SET Balance=(Balance+$amount) WHERE name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  

} else {
  echo "Error in updating record: " . $con->error;
}
}
if($flag==true){
    $sql = "SELECT * from customers where name='$sender'";
    $result = $con-> query($sql);
    while($row = $result->fetch_assoc())
     {
         $s_name=$row['sender'];
 }
//  Transcation DEatiled Stored in the DB

 $sql = "SELECT * from customers where name='$receiver'";
 $result = $con-> query($sql);
 while($row = $result->fetch_assoc())
  {
      $r_name=$row['receiver'];
}        
$sql = "INSERT INTO `Spark`. `transfer` (`Sender`, `Receiver`, `Amount`,`Date`) VALUES ('$sender','$receiver','$amount', current_timestamp())";
if ($con->query($sql) === TRUE) {
} else 
{
  echo "Error updating record: " . $con->error;
}
}

if($flag==true){
  $location='Details.php?user='.$sender;
  header("Location: $location&message=success");//for redirecting it to detail page with message
}
?>

</body>
</html>