<div class="container" style="min-height:520px;">
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
						    <a href="<?php echo base_url();?>Organization/jobdetails?id=<?php echo $value->jobid;?>" class="card-link">View</a>
						    <a href="<?php echo base_url();?>Organization/jobupdate?jid=<?php echo $value->jobid;?>" class="card-link">Update</a>
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
<script>	
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>


