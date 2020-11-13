<?php 
	if(isset($search)){
		?>
		<div class="container" style="min-height: 550px;">
			<div class="row" style="margin: 20px;">
		<?php
		if (count($search)>0){
			foreach ($search as $value) {
					?>
					<div class="card card-small mb-3" style="margin: 20px;">
						<div class="card" style="width: 10rem;">
						  <img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" height="100px">
						  <div class="card-body">
						    <h5 class="card-title">Organization name: </h5>
						    <label for=""><?php echo $value->companyname;?></label><br>
						    <a href="<?php echo base_url();?>Normal/showJobDetails?viewjobid=<?php echo $value->uid;?>" class="card-link">View</a>
						  </div>
					</div>
					</div>
					<?php
	 		}
		}
		else{
			?>
				<h2>No Data Found while searching</h2>
			<?php	
		}
		?>
		</div>
	</div>
		<?php
	}

	elseif(isset($jobarea)){
		?>
		<div class="container" style="min-height: 550px;">
			<div class="row" style="margin: 20px;">
		<?php
		if (count($jobarea)>0){
			foreach ($jobarea as $value) {
					?>
					<div class="card card-small mb-3" style="margin: 20px;">
						<div class="card" style="width: 10rem;">
						  <img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" height="100px">
						  <div class="card-body">
						    <h5 class="card-title">Organization name: </h5>
						    <label for=""><?php echo $value->companyname;?></label><br>
						    <a href="<?php echo base_url();?>Normal/showJobDetails?viewjobid=<?php echo $value->uid;?>" class="card-link">View</a>
						  </div>
					</div>
					</div>
					<?php
	 		}
		}
		else{
			?>
				<h2>No Data Found while searching</h2>
			<?php	
		}
		?>
		</div>
	</div>
		<?php
	}

	elseif(isset($all)){
		?>
		<div class="container" style="min-height: 550px;">
			<div class="row" style="margin: 20px;">
		<?php
		if (count($all)>0){
			foreach ($all as $value) {
					?>
					<div class="card card-small mb-3" style="margin: 20px;">
						<div class="card" style="width: 10rem;">
						  <img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" height="100px">
						  <div class="card-body">
						    <h5 class="card-title">Organization name: </h5>
						    <label for=""><?php echo $value->companyname;?></label><br>
						    <a href="<?php echo base_url();?>Normal/showJobDetails?viewjobid=<?php echo $value->uid;?>" class="card-link">View</a>
						  </div>
					</div>
					</div>
					<?php
	 		}
		}
		else{
			?>
				<h2>No Data Found while searching</h2>
			<?php	
		}
		?>
		</div>
	</div>
		<?php
	}
else{
?>
<div class="container" style="min-height:600px;">
	<div class="row card-group" style="border-radius: 0px; padding: 10px;">
		<label for="JobSeeker" style="margin: 0px 10px 0px 10px;">Recent Posted Jobs: </label>
			<div class="row col-lg-12">
		    <?php 
		    if (isset($jobdetails)) {
		    	if (count($jobdetails)>0) {
					    foreach ($jobdetails as $value) {
		    	?>
				<div class="card card-small col-lg-2 col-md-4 col-sm-4 col-xs-6" style="padding: 10px; border-radius: 0px; margin:10px; margin-left: 25px;">
				<div class="row">
					<div class="card-body col-lg-4">
					<img class="img-fluid rounded" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" style="height: 50px;">
					</div>
					<div class="card-body col-lg-8" style="padding: 5px; ">
						<div class="col-lg-12" style="margin: 0px; padding: 0px; overflow: hidden;">
						<label title="<?php echo $value->companyname;?>" style="font-size: 12px; font-weight: bold;"><?php echo $value->companyname?></label><br>
						<label title="<?php echo $value->companyname;?>" style="font-size: 12px; font-weight: bold;"><?php echo $value->jobtitle?></label><br>
						<label style="font-size: 12px;"><?php echo $value->position;?></label>
						</div>
						<div class="col-lg-12" style="margin: 0px; padding: 0px;">	
						<a href="<?php echo base_url();?>Normal/showJobDetails?viewjobid=<?php echo $value->jobid;?>" class="card-link">View</a>
						</div>
					</div>	
				</div>
				</div>
		    	<?php
		    	}
		   		}
		    else{
		    	echo 'No Jobs Found';
		    	}    		
		    }
		    else{
		   	echo 'No Data Found';
		    }
		 ?>
		</div>
	</div>
</div>
<?php
}
if(isset($recommend)){
		?>
		<?php
		if (count($recommend)>0){
			foreach ($recommend as $value) {
					echo $value->jobtitle;
	 		}
		}
		else{
			echo 'No data found';	
		}
	}
?>


