
<div class="row">
	<div class="col-md-6">
		Picture:
		<img class="img img-fluid" src="./uploads/<?= $r["i_picture"] ?>" /><hr />
	</div>
	
	<div class="col-md-6">
	<?php
		$colors = explode(",", $r["i_colors"]);
	?>
		Colors:<br />
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" disabled name="colors[]" <?= in_array("red", $colors) ? "checked" : "" ?> class="form-check-input" value="red"> red
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" disabled <?= in_array("blue", $colors) ? "checked" : "" ?> name="colors[]" class="form-check-input" value="blue"> blue
			</label>
		</div>

		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" disabled <?= in_array("yellow", $colors) ? "checked" : "" ?> name="colors[]" class="form-check-input" value="yellow"> yellow
			</label>
		</div>

		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" disabled <?= in_array("green", $colors) ? "checked" : "" ?> name="colors[]" class="form-check-input" value="green"> green
			</label>
		</div>
	</div>
</div>

