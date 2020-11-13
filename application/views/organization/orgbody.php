<?php if(isset($search)){
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
						    <h5 class="card-title">Seeker Name: </h5>
						    <label for=""><?php echo $value->firstname. ' '. $value->lastname;?></label><br>
						    <a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->uid;?>" class="card-link">View</a>
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
						    <h5 class="card-title">Seeker Name: </h5>
						    <label for=""><?php echo $value->firstname. ' '. $value->lastname;?></label><br>
						    <a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->uid;?>" class="card-link">View</a>
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
						    <h5 class="card-title">Seeker Name: </h5>
						    <label for=""><?php echo $value->firstname. ' '. $value->lastname;?></label><br>
						    <a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->uid;?>" class="card-link">View</a>
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
	<div class="container" style="min-height:560px;">
	<div class="row card-group" style="border-radius: 0px; padding: 10px;">
		<label for="JobSeeker" style="margin: 0px 10px 0px 10px;">Recent Register JobSeekers: </label>
			<div class="row col-lg-12">
				<?php
				if (count($user)>0) {
				    foreach ($user as $value) {
				    	?>
				<div class="card card-small col-lg-2 col-md-4 col-sm-4 col-xs-6" style="padding: 10px; border-radius: 0px; margin:10px; margin-left: 25px;">
				<div class="row">
					<div class="card-body col-lg-4">
					<img class="img-fluid rounded" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" style="height: 50px;">
					</div>
					<div class="card-body col-lg-8" style="padding-bottom: 0px;">
						<div class="col-lg-12" style="margin: 0px; padding: 0px; height: 60px;">
						<label style="font-size: 12px; font-weight: bold;"><?php echo $value->firstname.' '.$value->lastname;?></label><br>
						<label style="font-size: 12px;"><?php echo $value->qualification;?></label>
						<label style="font-size: 12px;"><?php echo $value->programs;?></label>
						</div>
						<div class="col-lg-12" style="margin: 0px; padding: 0px;">	
						<a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->uid;?>" class="card-link">View</a>
						</div>
					</div>	
				</div>
				</div>
				<?php
				  	  }
					 }
				 else{
				  ?>
				<h2>No Jobseeker!!! </h2>
				  <?php
			} 
		?>	
			</div>
	</div>

	<div class="row card-group" style="border-radius: 0px; padding: 10px;">
		<label for="JobSeeker" style="margin: 0px 10px 0px 10px;">Other Active Jobs by other company: </label>
			<div class="row col-lg-12">
				<?php
				if (count($activejob)>0) {
				    foreach ($activejob as $value) {
				    	?>
				<div class="card card-small col-lg-2 col-md-4 col-sm-4 col-xs-6" style="padding: 10px; border-radius: 0px; margin:10px; margin-left: 25px;">
				<div class="row">
					<div class="card-body col-lg-4">
					<img class="img-fluid rounded" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" style="height: 50px;">
					</div>
					<div class="card-body col-lg-8" style="padding: 5px; ">
						<div class="col-lg-12" style="margin: 0px; padding: 0px; overflow: hidden;">
						<label title="<?php echo $value->companyname;?>" style="font-size: 12px; font-weight: bold;"><?php echo $value->companyname?></label><br>
						<a href="#" target="_blank" title="<?php echo $value->companylink;?>"><label style="font-size: 12px;"><?php echo $value->companylink;?></label></a>
						</div>
						<div class="col-lg-12" style="margin: 0px; padding: 0px;">	
						<a href="<?php echo base_url();?>Organization/showJobDetails?viewjobid=<?php echo $value->jobid;?>" class="card-link">View</a>
						</div>
					</div>	
				</div>
				</div>
				<?php
				  	  }
					 }
				 else{
				  ?>
				<h2>No Company Register!!! </h2>
				  <?php
			} 
		?>	
		</div>
	</div>
</div>
<?php
}
?>