<?php include_once 'header.php'; 
include_once '../model/index.php';
$plugin_release = $wpdb->get_results("SELECT * FROM wordpress_release",ARRAY_A)[0];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-info">
           <div class="box box-info">
               <div class="box-header">
               	<h4>Plugin New Release<h4>
				<form class="form-horizontal"  method="post" action="../controller/update_wordpress_release_controller.php">
					<div class="box-body">
						<div class="form-group ">
								<label for="inputEmail3" class="col-sm-2 control-label">Plugin Folder Name</label>
							<div class="col-sm-5">
								<input type="text" readonly="" class="form-control" value="<?php echo $plugin_release['slug'] ?>" id="inputEmail3" placeholder="Plugin Folder Name" name="slug" required>
							</div>
						</div>  
					  
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Version</label>  
							<div class="col-sm-5">
								<input type="text" class="form-control" value="<?php echo $plugin_release['version'] ?>" id="#" placeholder="Version" name="version" required>
							</div>
						</div>   
 
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Download Url</label>  
							<div class="col-sm-5">
								<input type="text" class="form-control" value="<?php echo $plugin_release['download_url'] ?>" id="#" placeholder="Download Url" name="download_url" required>
							</div>
						</div> 
					</div>
					<div class="box-footer">
						<button type="submit" id="#"  class="btn btn-info pull-right">New Release Plugin</button>
					</div>
				</form>
			    </div>
		    </div>
		</div>
	</div>
</div>


<?php include_once 'footer.php'; ?>