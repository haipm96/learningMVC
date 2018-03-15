<?php
	$conn = mysqli_connect("thuctapphp.com", "root", "12345678", "thuctapPHP");
	if($conn){
		echo "string";
		$sql = " SELECT * from student ";
		$query=mysqli_query($conn, $sql);
		      $count = mysqli_num_rows($query);
		      
		        //return mysqli_fetch_assoc($sql);
		        echo $count;
	}
?>