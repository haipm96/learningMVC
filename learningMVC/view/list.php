<!DOCTYPE html>
<html>
<head>
	<title>Danh sach sinh vien</title>
</head>
<body>
	<a href="">Them sinh vien</a>
	<table>
		<tr>
			<!-- <th>ID</th> -->
			<th>Name</th>
			<th>Action</th>
		</tr>

		<?php
		include ('./../controller/studentController.php');

		$c_student = new studentController();
		$std = $c_student->listStudent();
		foreach ($std as $name) {?>
			<tr>	
				
				<td><?php  echo $name; ?></td>
				<td></td>
			</tr>
		<?php }
		
		?>
	</table>
</body>
</html>