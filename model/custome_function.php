<?php 
	if (!function_exists('apply_filters')) {
	function apply_filters($this_name, $this_value, $ignorable = array()) {
		return $this_value;
	}
}
 ?>