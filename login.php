<?php
include_once(__DIR__ . "/config.php");

session_start();

if(isset($_POST["username"], $_POST["password"])){
	$q = mysqli_query($conn, "SELECT * FROM users WHERE username = '". $_POST["username"] ."' AND password = '". $_POST["password"] ."'");
	$n = mysqli_num_rows($q);
	
	if($n > 0){
		$r = mysqli_fetch_array($q);
		
		$_SESSION["user"] = [
			"id"		=> $r["id"],
			"password"	=> $r["password"],
			"username"	=> $r["username"]
		];
		
		header("Location: index.php");
	}else{
		$error = "Username and password is incorrect.";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-4"></div>
		
		<div class="col-md-4">
		<?php
			if(isset($error)){
			?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> <?= $error ?>
			</div>
			<?php
			}
		?>
			<div class="card mt-2">
				<div class="card-header">
					Login - Simple CRUD
				</div>
				
				<div class="card-body">
					<form action="" method="POST">
						Username:
						<input type="text" class="form-control" name="username" placeholder="Username" /><br />
						
						Password:
						<input type="password" class="form-control" name="password" placeholder="Password" /><br />
						
						<button name="login" class="btn btn-sm btn-primary">
							Login
						</button>
					</form>
				</div>
			</div>
			
		</diV>
	</div>
</div>

</body>
</html> 