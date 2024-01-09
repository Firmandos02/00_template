<!-- START : EXT template tindakan dan hasil -->
<?php $this->load->view('layouts/j_page/form_aktual');
?>
<?php $this->load->view('layouts/j_page/form_hasil');
?>
<?php $this->load->view('layouts/j_page/other_form');
?>
<!-- END : EXT template tindakan dan hasil -->

<script>
	document.addEventListener('DOMContentLoaded', function() {
		//  ================ Start ==============
		// templating form yang memiliki parameter
		<?php
		$constData = [];
		$nor = 1;
		foreach ($form as $val) {
			if ($val['std_stat'] == 1) {
				$constData[] = [
					'a' => $val['i_aktual'],
					'j' => $val['i_judge'],
					't' => $val['i_tindakan'],
					'h' => $val['i_hasil'],
					'hv' => $val['i_hasil_val'],
					'min' => $val['std_min'],
					'max' => $val['std_max'],
					'o' => $val['operation'],
					'trigger' => $nor . 'trig'
				];
			}
			$nor++;
		}

		echo 'const beltInputs = ' . json_encode($constData, JSON_PRETTY_PRINT) . ';';
		?>
		// templating form yang memiliki parameter
		//  ================ END==============

		beltInputs.forEach(beltInput => {
			const aInput = document.getElementById(beltInput.a);
			const jInput = document.getElementById(beltInput.j);
			const tInput = document.getElementById(beltInput.t);
			const hInput = document.getElementById(beltInput.h);
			const hvInput = document.getElementById(beltInput.hv);

			function updateJValue() {
				const inputValue = parseFloat(aInput.value);

				if (isNaN(inputValue) || inputValue === null || inputValue === "") {
					jInput.value = '';
					aInput.style.backgroundColor = '';
					aInput.style.color = '';
					aInput.style.fontWeight = '';
					tInput.removeAttribute('required');
					hInput.removeAttribute('required');
					tInput.setAttribute('hidden', true);
					hInput.setAttribute('hidden', true);
				} else if (
					(inputValue < beltInput.min || beltInput.o === '>=' && inputValue >= beltInput.max) ||
					(inputValue < beltInput.min || beltInput.o === '>' && inputValue > beltInput.max)
				) {
					jInput.value = 'NG';
					aInput.style.backgroundColor = '#dc3545';
					aInput.style.color = 'white';
					aInput.style.fontWeight = 'bold';
					tInput.removeAttribute('hidden');
					hInput.removeAttribute('hidden');
					tInput.setAttribute('required', true);
					hInput.setAttribute('required', true);
				} else {
					jInput.value = 'OK';
					aInput.style.backgroundColor = '#28a745';
					aInput.style.color = 'white';
					aInput.style.fontWeight = 'bold';
					tInput.removeAttribute('required');
					hInput.removeAttribute('required');
					tInput.setAttribute('hidden', true);
					hInput.setAttribute('hidden', true);
					tInput.value = '';
					hInput.value = '';
					hvInput.value = '';
				}
			}

			function updateHValue() {
				const inputValue = parseFloat(hInput.value);

				if (isNaN(inputValue) || inputValue === null || inputValue === "") {
					hvInput.value = '';
					hInput.style.backgroundColor = '';
					hInput.style.color = '';
					hInput.style.fontWeight = '';
				} else if (
					(beltInput.o === '>=' && inputValue >= beltInput.max) ||
					(beltInput.o === '>' && inputValue > beltInput.max) ||
					(inputValue < beltInput.min)
				) {
					hvInput.value = 'NG';
					hInput.style.backgroundColor = '#dc3545';
					hInput.style.color = 'white';
					hInput.style.fontWeight = 'bold';
				} else {
					hvInput.value = 'OK';
					hInput.style.backgroundColor = '#28a745';
					hInput.style.color = 'white';
					hInput.style.fontWeight = 'bold';
				}
			}

			updateJValue();
			updateHValue();

			aInput.addEventListener('input', updateJValue);
			hInput.addEventListener('input', updateHValue);
		});
	});
</script>
