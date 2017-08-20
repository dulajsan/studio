<html>
<body>
<?php
$sql="SELECT a.booking_for_date, b.media_name,
      FROM booking a,media b ,
      WHERE a.booking_id=b.booking_id LIMIT 3";

 mysql_select_db('space_turn');
  $retval=mysql_query($sql,$conn);
  if(!$retval )
 {
 die('could not get data:' .mysqli_error());
 }
 while ($row=mysql_fetch_array($retval,MYSQL_ASSOC));
 {
 echo $row["booking_for_date"] ;
} 
echo "Fetched data successfully\n";
		
$conn->close();
?>
</body>
</html>