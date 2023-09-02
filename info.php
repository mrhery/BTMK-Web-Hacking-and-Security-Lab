<?php
include_once(__DIR__ . "/config.php");

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			<div class="card mt-2">
				<div class="card-header">
					Info Item
					
					<a href="index.php" class="btn btn-primary btn-sm">
						Back
					</a>
				</div>
				
				<div class="card-body">
				<?php
					$id = $_GET["id"];
					$q = mysqli_query($conn, "SELECT * FROM items WHERE i_id = '". $id ."'");
					$n = mysqli_num_rows($q);
					
					if($n > 0){
						$r = mysqli_fetch_array($q);
						
						$view = "info_info.php";
						
						if(isset($_GET["view"])){
							$view = $_GET["view"];
						}
				?>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link <?= $view == "info_info.php" ? "active" : "" ?>" href="info.php?id=<?= $_GET["id"] ?>&view=info_info.php">
								Info
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?= $view == "info_image.php" ? "active" : "" ?>" href="info.php?id=<?= $_GET["id"] ?>&view=info_image.php">
								Image
							</a>
						</li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane container-fluid active mt-5" >
						<?php
							include_once($view);
						?>
						</div>
					</div>
				<?PHP
					}
				?>
				</div>
			</div>
			
		</diV>
	</div>
</div>

</body>
</html> 