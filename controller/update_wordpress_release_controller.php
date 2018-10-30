<?php 
	include_once '../model/index.php';
	global $wpdb;
	$column_values = array('slug'=>$_POST['slug'],'download_url'=>$_POST['download_url'],'version'=>$_POST['version']);
	$where = array('id'=>'1');
	if($wpdb->update('wordpress_release',$column_values,$where)){
		header('location:../view/plugin_new_release.php');
	}else{
		header('location:../view/plugin_new_release.php');
	}
 ?>