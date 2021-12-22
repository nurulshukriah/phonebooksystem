<!DOCTYPE html>
<html>
	<head>
		<title>Edit Records</title>
	</head>
	<body>
		<center>
			<h2>Edit Records</h2>
			<form method="post" action="<?= base_url('user/update'); ?>">
			<input type="hidden" name="id" value="<?= $user->id; ?>">
				<table border="1">
					<tr>
						<td>Name</td>
						<td><input type="text" value="<?= $user->emp_name; ?>" name="emp_name"></td>
					</tr>
					<tr>
						<td>Phone Number 1</td>
						<td><input type="text" value="<?= $user->emp_phone1; ?>" name="emp_phone1"></td>
					</tr>
					<tr>
						<td>Phone Number 2</td>
						<td><input type="text" value="<?= $user->emp_phone2; ?>" name="emp_phone2"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="edit" value="Edit Records"></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>