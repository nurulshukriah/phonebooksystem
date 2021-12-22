<!DOCTYPE html>
<html>
	<head>
		<title>Phone Book System</title>
	</head>
	<body>
		<h2>Phone Book System</h2>
		<a href="<?= base_url('user/add'); ?>">Add Records</a>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Name</td>
				<td>Phone Number 1</td>
				<td>Phone Number 2</td>
				<td colspan="2"><center>Action</center></td>
			</tr>
			<?php
			foreach ($users->result() as $i => $user)
			{
				?>
				<tr>
					<td><?= ++$i; ?></td>
					<td><?= $user->emp_name; ?></td>
					<td><?= $user->emp_phone1; ?></td>	
					<td><?= $user->emp_phone2; ?></td>	
					<td><a href="<?= base_url('user/edit/'.$user->id); ?>">Edit</a></td>
					<td><a href="<?= base_url('user/delete/'.$user->id); ?>">Delete</a></td>
				</tr>
				<?php
			}?>
		</table>
	</body>
</html>