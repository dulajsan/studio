
<html>
<head>
<style>
  #label1{
      font size:14;
      font family:"Times New Roman", Georgia, Serif;
      font color:black;
 }
 </style>
</head>
      
<body>

<form action="hired1.php">
<table>
<tr><td>
<label id="label1"><b>Hired date</b></td><td></label><?php echo $row['booking_for_date']?></td></tr></table><br>
<img src="<?php echo'../images/'.$row['image_name'] ?>"id=<?php echo'../images/'.$row['image_id'] ?> width="175" height="200" />
<img src="<?php echo'../images/'.$row['image_name']?>"id=<?php echo'../images/'.$row['image_name'] ?> width="175" height="200" />
<img src="<?php echo'../images/'.$row['image_name']?>"id=<?php echo'../images/'.$row['image_name'] ?> width="175" height="200" />
<br>
<a href="moreimages.php" class="button" "<?php echo "date =".$row['booking_for_date']?>">Read more..</a>
</form>
</body>
</html>