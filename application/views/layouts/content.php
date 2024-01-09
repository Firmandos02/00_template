<?php
if ($content) {
	$this->load->view($content);
} else {
	echo '<!-- ============ -->	<!-- No Content available! -->';
}
