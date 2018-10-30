<?php include_once 'header.php'; 
include_once '../model/index.php';
$plugin_list = $wpdb->get_results("SELECT * FROM activation_key",ARRAY_A);
?>


<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header">
                <h4>
                    <center>User Report</center>
                </h4>
			        <?php if(!empty($plugin_list)){ ?>
			          <div class="box-body">
			            <div class="table-responsive">
			              <table  class="table table-bordered table-striped" id="staff_detail_table">
			                <thead>
			                  <tr>
			                    <th>Name</th>
			                    <th>Email</th>
			                    <th>Mobile Number</th>
			                    <th>Site Url</th>
			                    <th>Expairy Date</th>

			                  </tr>
			                </thead>
			                <tbody>
			                  <?php 

			                  foreach ($plugin_list as $key => $value) {
			                  	$timeDiff = (strtotime($value['to_date'])-strtotime(date('d-m-Y')));
								$numberDays = $timeDiff/86400;  // 86400 seconds in one day

			                   ?>
			                      <tr>
			                      	<td><?php echo $value['name'] ?></td>
			                      	<td><?php echo $value['email'] ?></td>
			                      	<td><?php echo $value['mobile_number'] ?></td>
			                      	<td><?php  if(empty($value['site_url'])){
			                  		echo "Not Activated";
			                  }else{
			                  	echo $value['site_url'];
			                  } ?></td>
			                      	<td><?php echo $numberDays.' '.'Day' ?></td>

			                      </tr>
			                 <?php  }?>
			                </tbody>
			              </table>
			            </div>
			          </div>
			      <?php }else{
			      		echo '<blockquote><p>No Plugin Report till now!!</p></blockquote>';
			       } ?>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>