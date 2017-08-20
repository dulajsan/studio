
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "space_turn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$_GET="";
$_GET["booking_for_date"]=booking_for_date;

$sql="SELECT a.booking_for_date,b.image_name,
      FROM booking_table a,media_table b
      WHERE a.booking_id=b.booking_id";


 mysql_select_db('space_turn');
  $retval=mysql_query($sql,$conn);
  if(!$retval )
 {
 die('could not get data:'. mysqli_error());
 }
 while ($row=mysql_fetch_array($retval,MYSQL_ASSOC));
 {
 echo $row['booking_for_date'].$row["image_name"];
} 
echo "Fetched data successfully\n";
		
$conn->close();
?>
</body>
</html>
