<?php
Class Database {
	private $username = 'root';
	private $password = '';
	private $db_name = 'wp-update-admin';
	private $host = 'localhost';
	private $slug = '';
	public function __construct(){
		$this->enable_errors();
		$this->include_lib();
		$this->initiate_database();
	}
	private function enable_errors(){
		define('WP_DEBUG', false);
		define('WP_DEBUG_DISPLAY', false);
	}
	private function include_lib(){
		include_once 'wp-db.php';
		include_once 'custome_function.php';
	}
	private function initiate_database() {
		//initialize wpdb since we are using it independently
		global $wpdb;
		$wpdb = new wpdb($this->username, $this->password, $this->db_name, $this->host);
		//setting the prefix from post value;
		// $wpdb->prefix = $wpdb->base_prefix = $this->slug;
	}
}
new Database;