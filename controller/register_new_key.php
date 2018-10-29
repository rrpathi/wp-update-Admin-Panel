<?php 
	include_once '../model/index.php';
	global $wpdb;
	$activation_key = sha1(uniqid().date('Y-m-d'));
	$column_values = array('name' =>$_POST['name'],'email' =>$_POST['email'],'mobile_number' =>$_POST['mobile_number'],'from_date'=>$_POST['from_date'],'to_date'=>$_POST['to_date'],'activation_key'=>$activation_key);
	$activation_key = $wpdb->insert('activation_key',$column_values);
	if($activation_key){
		header('location:../view/add_new_key.php');
	}else{
		header('location:../view/add_new_key.php');
	}
 ?>