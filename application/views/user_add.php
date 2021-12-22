<!DOCTYPE html>
<html>
	<head>
		<title>Add Records</title>
	</head>
	<body>
		<center>
			<h2>Add Records</h2>
			<form method="post" action="<?= base_url('user/save'); ?>">
				<table border="1">
					<tr>
						<td>Name</td>
						<td><input type="text" name="emp_name"></td>
					</tr>
					<tr>
						<td>Phone Number 1</td>
						<td><input type="text" name="emp_phone1"></td>
					</tr>
					<tr>
						<td>Phone Number 2</td>
						<td><input type="text" name="emp_phone2"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="Add Record"></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>