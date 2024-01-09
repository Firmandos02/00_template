<?php
if ($extend_js) {
	echo '	<!-- ============ -->	<!-- START: extend JS -->';
	$this->load->view($extend_js);
	echo '	<!-- ============ -->	<!-- END: extend JS -->';
} else {
	echo '<!-- ============ -->	<!-- No extend JS available! -->';
}
