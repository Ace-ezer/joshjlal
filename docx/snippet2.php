<?php
	
	require_once 'server.php';


	$sql="SELECT * FROM events WHERE event='tennis';";
	$res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);

    if($row['set1']!=0)
	echo	"<a href='documents/tennisset1.pdf'>Schedule</a>";
	else  echo	"<a href='#''>Schedule</a>";
	if($row['set2']!=0)
	echo	" <a href='documents/tennisset2.pdf'>Results</a>";
	else   echo "<a href='#''>Result</a>";
  echo "<a href='#''>Rules</a>";
?>