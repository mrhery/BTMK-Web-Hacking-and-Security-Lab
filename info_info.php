<div class="row">
	<div class="col-md-6">
		Name:
		<input type="text" name="name" class="form-control" disabled placeholder="Name" value="<?= $r["i_name"] ?>" /><br />
		
		Description:
		<?= htmlspecialchars_decode($r["i_description"]) ?><br />
	</div>
	
	<div class="col-md-6">
		Price:
		<input type="text" name="price" value="<?= $r["i_price"] ?>" disabled class="form-control" placeholder="0.00" /><br />
		
		
		
	</div>
	
</div>