<div class="container" style="min-height: 550px;">
	<div class="container_fluid">
	<div class="row" style="margin: 10px;">
		<div class="col-lg-12" onclick="divhide()" style="background-color: #d7e3f7; padding: 0px; border:1px solid #d7e3f7; border-radius: 5px; margin-bottom: 10px;">	
		<h6 style="margin-left: 20px; margin-top: 5px; font-weight: bold;">Apply Job Status : </h6><i class="material-icons" style="float: right;padding: 0px; margin-top: -30px; margin-right: 20px;">add_circle_outline</i>
		</div>
		<table class="table" id="applytable" style="display: none;">
		  <thead class="table-primary" style="border-radius: 5px;">
		    <tr>
		      <th scope="col">Company Name</th>
		      <th scope="col">Job title</th>
		      <th scope="col">Job Sector</th>
		      <th scope="col">Date of Post</th>
		      <th scope="col">Deadline</th>
		      <th scope="col">Salary</th>
		      <th scope="col">Result</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (isset($applydata)){
		  		if (count($applydata)>0){
		  			foreach ($applydata as $value) {
		  				if ($value->applyremarks == 'pending'){	
		  			?>
					<tr>
				      <td><?php echo $value->organizationname;?></td>
				      <td><?php echo $value->jobtitle;?></td>
				      <td><?php echo $value->jobtype;?></td>
				      <td><?php echo $value->postdate;?></td>
				      <td><?php echo $value->deadline;?></td>
				      <td><?php echo $value->salary;?></td>
				      <td><span style="color: green; font-weight: bold;"><?php echo ucfirst($value->applyremarks);?></span></td>
				      <td>
				      	<div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Click to action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?php echo base_url();?>Normal/showJobDetails?viewjobid=<?php echo $value->jobid;?>" style="text-decoration:none"><button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">View</button></a>
                              </div>
                          </div>
                      </td>
				    </tr>
		  			<?php
		  			}
		  			}
		  		}
		  		else{
		  			?>
					<td colspan="8">You havent Applied yet.</td>
		  			<?php
		  		}
		  		?>
		  		<?php
		  	}
		  	else{
		  		?>
		  		<td colspan="8">You havent Applied yet.</td>
		  		<?php
		  	} 
		  	?>
		  </tbody>
		</table>
	</div>
	</div>
	<div class="container_fluid" style="margin-top: 10px;">
	<div class="row" style="margin: 10px;">
		<div class="col-lg-12" onclick="divhide2()" style="background-color: #d7e3f7; padding: 0px; border:1px solid #d7e3f7; border-radius: 5px; margin-bottom: 10px;">	
		<h6 style="margin-left: 20px; margin-top: 5px; font-weight: bold;">Interview Accept Status :</h6><i class="material-icons" style="float: right;padding: 0px; margin-top: -30px; margin-right: 20px;">add_circle_outline</i>
		</div>
		<table class="table" id="connection" style="display: none;">
		  <thead class="table-primary" style="border-radius: 5px;">
		    <tr>
		      <th scope="col">Company Name</th>
		      <th scope="col">Job title</th>
		      <th scope="col">Job Sector</th>
		      <th scope="col">Date of Post</th>
		      <th scope="col">Deadline</th>
		      <th scope="col">Salary</th>
		      <th scope="col">Result</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (isset($applydata)){
		  		if (count($applydata)>0){
		  			foreach ($applydata as $value) {
		  				if($value->applyremarks == 'accept'){	
		  			?>
					<tr>
				      <td><?php echo $value->organizationname;?></td>
				      <td><?php echo $value->jobtitle;?></td>
				      <td><?php echo $value->jobtype;?></td>
				      <td><?php echo $value->postdate;?></td>
				      <td><?php echo $value->deadline;?></td>
				      <td><?php echo $value->salary;?></td>
				      <td><span style="color: green; font-weight: bold;"><?php echo ucfirst($value->applyremarks);?></span></td>
				      <td>
				      	<div class="dropdown">
                              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Click to action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?php echo base_url();?>Normal/showInterviewDetails?viewjobid=<?php echo $value->jobid;?>&viewuserid=<?php echo $value->useruid;?>" style="text-decoration:none"><button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">View details</button></a>
                              </div>
                          </div>
                      </td>
				    </tr>
		  			<?php
		  				}
		  			}
		  		}
		  		else{
		  			?>
					<td colspan="8">None of offer you a job, It might be your profile is not enough strong or some of details are missing</td>
		  			<?php
		  		}
		  		?>
		  		<?php
		  	}
		  	else{
		  		?>
		  		<td colspan="8">None of offer you a job, It might be your profile is not enough strong or some of details are missing</td>
		  		<?php
		  	} 
		  	?>
		  </tbody>
		</table>
	</div>
	</div>
</div>

<script>
function divhide() {
  var x = document.getElementById("applytable");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function divhide2() {
  var x = document.getElementById("connection");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>