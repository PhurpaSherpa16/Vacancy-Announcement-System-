<div class="container">
	<div class="row" style="margin: 20px;">
			<?php
				if (count($jobdata)>0) {
				    foreach ($jobdata as $value) {
				    	?>
				      	<div class="card card-small mb-3" style="margin: 20px;">
						<div class="card" style="width: 10rem;">
						  <img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $orgdata->image;?>" alt="Card image cap" height="100px">
						  <div class="card-body">
						    <h5 class="card-title">JobTitle: </h5>
						    <label for=""><?php echo $value->jobtitle;?></label><br>
						    <a href="#" class="card-link">View</a>
						    <a href="#" class="card-link">Update</a>
						  </div>
						</div>
						</div>
				        <?php
				  	  }
					 }
				 else{
				  ?>
				<h2>No Job Posted Yet!!! </h2>
				  <?php
			} 
		?>	
	</div>
	<div class="row">
		<div class="col-lg-12">
            <div class="card card-small mb-12">
                <div class="card-header border-bottom">
                  <h6 class="m-0">Account Details</h6>
                </div>
					<?php
						if (count($jobdata)>0) {
						    foreach ($jobdata as $value) {
						    	?>
						      	<div class="card card-small mb-4" style="margin: 20px; display: inline; width: 150px;">
									<div class="card" style="width: 10rem;">
								  	<img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $orgdata->image;?>" alt="Card image cap" height="100px">
								  	<div class="card-body">
								    	<h5 class="card-title">JobTitle: </h5>
								    	<label for=""><?php echo $value->jobtitle;?></label><br>
								    	<a href="#" class="card-link">View</a>
								    	<a href="#" class="card-link">Update</a>
								  	</div>
									</div>
								</div>
						        <?php
						  	  }
							 }
						 else{
						  ?>
						<h2>No Job Posted Yet!!! </h2>
						  <?php
					} 
				?>	
            </div>
        </div>
	</div>
</div>
<script>	
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>


<div class="container" style="min-height:540px;">
	<div class="row card-group" style="margin:10px;">
			<?php
				if (count($user)>0) {
				    foreach ($user as $value) {
				    	?>
				      	<div class="card card-small col-lg-2" style="margin: 0px; padding: 0px; border-radius: 0px;">
						<div class="card" style="padding: 10px; border-radius: 0px;">
						  <img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Card image cap" height="100px">
						  <div class="card-body">
						    <h5 class="card-title">Full Name: </h5>
						    <label for=""><?php echo $value->firstname.' '.$value->lastname;?></label><br>
						    <label for=""><?php echo $value->qualification.' in '.$value->programs;?></label><br>
						    <a href="<?php echo base_url();?>Organization/showPerson?personid=<?php echo $value->uid;?>" class="card-link">View</a>
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
<script>	
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>


