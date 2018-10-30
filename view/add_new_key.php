<?php include_once 'header.php';?>
<!-- Add Vehicle Model -->
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-info">
           <div class="box box-info">
               <div class="box-header">
               	<h4>Create New Activation Code<h4>
				<form class="form-horizontal"  method="post" action="../controller/register_new_key.php">
					<div class="box-body">
						<div class="form-group ">
								<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name" required>
							</div>
						</div>  
						<div class="form-group ">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-5">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Enter Your Email Address" name="email" required>
							</div>
						</div>   
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>  
							<div class="col-sm-5">
								<input type="text" class="form-control" id="inputEmail3" placeholder="Phone Number" name="mobile_number" required>
							</div>
						</div>   

						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">From Date</label>  
							<div class="col-sm-5">
								<input type="text" class="form-control" id="dt1" placeholder="From Date" name="from_date">
							</div>
						</div> 
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Expiry Date</label>  
							<div class="col-sm-5">
								<input type="text" class="form-control" id="dt2" placeholder="To Date" name="to_date">
							</div>
						</div> 
					</div>
					<div class="box-footer">
						<button type="submit" id="#"  class="btn btn-info pull-right">Create New Activation Code</button>
					</div>
				</form>
			    </div>
		    </div>
		</div>
	</div>
</div>


<?php include_once 'footer.php'; ?>