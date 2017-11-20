<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * checking if result not null (in case parameter does not mach entries in database returns 404)
 * show_404(); - Not found — the Name could not be found and has therefore not been breached.
 * This view is good for both controllers at this time. 
 */

	
if ($records == !null) {
	$result = json_encode($records);
	echo  $result;
}
else {
	show_404();
}

?>