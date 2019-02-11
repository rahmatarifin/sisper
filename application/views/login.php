<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
<div>
<form method="post" action="<?php echo base_url(); ?>login/ceklogin">
	<div>
		<label>Username</label>
		<input type="text" placeholder="Username">
	</div>
	<div>
		<label>Password</label>
		<input type="password" placeholder="Password">
	</div>
	<div>
		<input type="submit" value="Simpan"> 
	</div>
</form>
</div>
</body>
</html>