<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * checking if result not null (in case parameter does not mach entries in database need to return 404)
 * show_404(); - Not found — the Name could not be found and has therefore not been breached.
 * encode to JSON and output
 */

	
if ($records == !null) {
	$result = json_encode($records);
	echo  $result;
}
else {
	show_404();
}

?>