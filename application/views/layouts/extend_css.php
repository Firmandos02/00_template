<?php
if ($extend_css) {
	echo '	<!-- ============ -->	<!-- START: extend CSS -->';
	$this->load->view($extend_css);
	echo '	<!-- ============ -->	<!-- END: extend CSS -->';
} else {
	echo '<!-- ============ -->	<!-- No extend CSS available! -->';
}
