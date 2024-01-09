<!-- Program 1 -->
<?php foreach ($lim_p1 as $val) { ?>
	<input type="hidden" id="lim_bott_<?php echo $val['id']; ?>" value="<?php echo $val['lim_bott']; ?>">
	<input type="hidden" id="lim_up_<?php echo $val['id']; ?>" value="<?php echo $val['lim_up']; ?>">
<?php } ?>

<!-- Program 2 -->
<div class="col-6">
	<div class="form-group">
		<label class="form-label">Time</label>
		<small class="sidetitle">hh:mm</small>
		<input id="waktucek" name="waktu_cek" type="number" class="form-control h-70" style="font-size: 40px;">
	</div>
</div>

<!-- Program 3 -->
<div class="col-6">
	<div class="form-group">
		<label class="form-label">Color</label>
		<select id="warna" name="color" class="form-select h-70" id="color" style="font-size: 40px;">
			<?php foreach ($color as $val) : ?>
				<option value="<?= $val['id']; ?>" data-lim-bott="<?= $val['lim_bott']; ?>" data-lim-up="<?= $val['lim_up'] ?>">
					<?= $val['name_as']; ?>
				</option>
			<?php endforeach; ?>
		</select>
	</div>
</div>

<!-- JavaScript -->
<script>
	document.getElementById('warna').addEventListener('change', function() {
		var selectedColor = this.options[this.selectedIndex];
		var limBott = selectedColor.getAttribute('data-lim-bott');
		var limUp = selectedColor.getAttribute('data-lim-up');
		var waktucek = parseFloat(document.getElementById('waktucek').value);

		if (waktucek < limBott || waktucek > limUp) {
			document.getElementById('judgement').value = 'NG';
		} else {
			document.getElementById('judgement').value = 'OK';
		}
	});

	// Trigger the change event to initialize the judgment based on the initial color selection
	document.getElementById('warna').dispatchEvent(new Event('change'));
</script>