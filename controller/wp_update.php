<?php 
	include_once '../model/index.php';
	global $wpdb;
	if(!empty($_POST['plugin_communication_key'])){
		$plugin_communication_key = $_POST['plugin_communication_key'];
	$date_validation = $wpdb->get_results("SELECT * FROM activation_key where plugin_communication_key ='$plugin_communication_key' ",ARRAY_A);
	$timeDiff = strtotime($date_validation[0]['to_date'])-(strtotime(date('d-m-Y')));
	$remaining_date = $timeDiff/86400;
		if($remaining_date >=1){
			$plugin_release = $wpdb->get_results("SELECT * FROM wordpress_release",ARRAY_A)[0];
			echo json_encode(array('slug'=>$plugin_release['slug'],'download_url'=>$plugin_release['download_url'],'version'=>$plugin_release['version']));
		}
	}
 ?>

 