<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ($records == !null) {
	$result = json_encode($records);
	echo  $result;
}
else {
show_404();
}

?>