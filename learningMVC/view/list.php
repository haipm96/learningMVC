<!DOCTYPE html>
<html>
<head>
	<title>Danh sach sinh vien</title>
</head>
<body>
	<a href="">Them sinh vien</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
		<?php
		include ('./../controller/studentController.php');
		$c_student = new studentController();
		$std = $c_student->listStudent();
		foreach ($std as $name) {?>
			<tr>	
				<td><?php  echo $name['studentId']; ?></td>
				<td><?php  echo $name['studentName']; ?></td>
				<td></td>
			</tr>
		<?php }
		?>
	</table>
</body>
</html>