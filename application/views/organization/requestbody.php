<div class="container" style="min-height: 550px;">
	<div class="container_fluid">
	<div class="row" style="margin: 10px;">
		<div class="col-lg-12" onclick="divhide()" style="background-color: #d7e3f7; padding: 0px; border:1px solid #d7e3f7; border-radius: 5px; margin-bottom: 10px;">	
		<h6 style="margin-left: 20px; margin-top: 5px; font-weight: bold;">Request For jobs : </h6><i class="material-icons" style="float: right;padding: 0px; margin-top: -30px; margin-right: 20px;">add_circle_outline</i>
		</div>
		<table class="table" id="applytable" style="display: none;">
		  <thead class="table-primary" style="border-radius: 5px;">
		    <tr>
		    	<th colspan="6">Seeker Details</th>
		    	<th colspan="3" style="background-color:rgba(163, 176, 198, 0.5)">Job Posted Details</th>
		    	<th colspan="2">Remarks</th>
		    </tr>
		    <tr>
		      <th scope="col">Seeker Image</th>
		      <th scope="col">Seeker Name</th>
		      <th scope="col">Qualification</th>
		      <th scope="col">In Which Program?</th>
		      <th scope="col">Expected salary</th>
		      <th scope="col">Seeker Interested Area</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Which Job?</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Expected qualification for job.</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Job area</th>
		      <th scope="col">Action</th>
		      <th scope="col">Status</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (isset($applydata)){
		  		if (count($applydata)>0){
		  			foreach ($applydata as $value) {
		  			?>
					<tr> 
					<td>
						<img class="img round" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="image" style="height: 30px; width: 30px;">
						</td>
				      <td><?php echo $value->seekername;?></td>
				      <td><?php echo $value->qualification;?></td>
				      <td><?php echo $value->programs;?></td>
				      <td><?php echo $value->salary;?></td>
				      <td><?php echo ucfirst($value->interest);?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobtitle;?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobqualification;?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobtype;?></td>
				      <td><a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->useruid;?>" style="text-decoration:none"><button class="btn btn-success">View Profile</button></a>
				      </td>
				      <td>
				      	<div class="dropdown">
                             <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span><?php echo ucfirst($value->applyremarks);?></span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?php echo base_url();?>Organization/interviewForm?viewjobid=<?php echo $value->aid;?>" style="text-decoration:none">
                                <button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">Call for interview</button></a>
                                <a href="<?php echo base_url();?>Organization/updateJobapply?viewjobid=<?php echo $value->aid;?>" style="text-decoration:none"><button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">Reject</button></a>
                              </div>
                          </div>
                      </td>
				      
				    </tr>
		  			<?php
		  			}
		  		}
		  		else{
		  			?>
					<td colspan="11">No on has Apply</td>
		  			<?php
		  		}
		  		?>
		  		<?php
		  	}
		  	else{
		  		?>
		  		<td colspan="11">No one has apply.</td>
		  		<?php
		  	} 
		  	?>
		  </tbody>
		</table>
	</div>
	<div class="row" style="margin: 10px;">
		<div class="col-lg-12" onclick="divhide1()" style="background-color: #d7e3f7; padding: 0px; border:1px solid #d7e3f7; border-radius: 5px; margin-bottom: 10px;">	
		<h6 style="margin-left: 20px; margin-top: 5px; font-weight: bold;">List of call interview candidate : </h6><i class="material-icons" style="float: right;padding: 0px; margin-top: -30px; margin-right: 20px;">add_circle_outline</i>
		</div>
		<table class="table" id="interviewlist" style="display: none;">
		  <thead class="table-primary" style="border-radius: 5px;">
		    <tr>
		    	<th colspan="6">Seeker Details</th>
		    	<th colspan="3" style="background-color:rgba(163, 176, 198, 0.5)">Job Posted Details</th>
		    	<th colspan="2">Remarks</th>
		    </tr>
		    <tr>
		      <th scope="col">Seeker Image</th>
		      <th scope="col">Seeker Name</th>
		      <th scope="col">Qualification</th>
		      <th scope="col">In Which Program?</th>
		      <th scope="col">Expected salary</th>
		      <th scope="col">Seeker Interested Area</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Which Job?</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Expected qualification for job.</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Job area</th>
		      <th scope="col">Action</th>
		      <th scope="col">Status</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (isset($interview)){
		  		if (count($interview)>0){
		  			foreach ($interview as $value) {
		  			?>
					<tr> 
					<td>
						<img class="img round" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="image" style="height: 30px; width: 30px;">
						</td>
				      <td><?php echo $value->seekername;?></td>
				      <td><?php echo $value->qualification;?></td>
				      <td><?php echo $value->programs;?></td>
				      <td><?php echo $value->salary;?></td>
				      <td><?php echo ucfirst($value->interest);?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobtitle;?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobqualification;?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobtype;?></td>
				      <td><a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->useruid;?>" style="text-decoration:none"><button class="btn btn-success">View Profile</button></a>
				      </td>
				      <td>
				      	<div class="dropdown">
                             <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span><?php echo ucfirst($value->applyremarks);?></span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?php echo base_url();?>Organization/updateJobapply?viewjobid=<?php echo $value->aid;?>" style="text-decoration:none">
                                <button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">Cancel interview</button></a>
                               <a href="<?php echo base_url();?>Organization/interviewFormUpdate?viewjobid=<?php echo $value->aid;?>" style="text-decoration:none">
                                <button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">Update interview</button></a>
                              </div>
                          </div>
                      </td>
				      
				    </tr>
		  			<?php
		  			}
		  		}
		  		else{
		  			?>
					<td colspan="11">no candiadate selected</td>
		  			<?php
		  		}
		  		?>
		  		<?php
		  	}
		  	else{
		  		?>
		  		<td colspan="11">no candiadate selected</td>
		  		<?php
		  	} 
		  	?>
		  </tbody>
		</table>
	</div>
	<div class="row" style="margin: 10px;">
		<div class="col-lg-12" onclick="divhide2()" style="background-color: #d7e3f7; padding: 0px; border:1px solid #d7e3f7; border-radius: 5px; margin-bottom: 10px;">	
		<h6 style="margin-left: 20px; margin-top: 5px; font-weight: bold;">List of call Rejected candidate : </h6><i class="material-icons" style="float: right;padding: 0px; margin-top: -30px; margin-right: 20px;">add_circle_outline</i>
		</div>
		<table class="table" id="rejectlist" style="display: none;">
		  <thead class="table-primary" style="border-radius: 5px;">
		    <tr>
		    	<th colspan="6">Seeker Details</th>
		    	<th colspan="3" style="background-color:rgba(163, 176, 198, 0.5)">Job Posted Details</th>
		    	<th colspan="2">Remarks</th>
		    </tr>
		    <tr>
		      <th scope="col">Seeker Image</th>
		      <th scope="col">Seeker Name</th>
		      <th scope="col">Qualification</th>
		      <th scope="col">In Which Program?</th>
		      <th scope="col">Expected salary</th>
		      <th scope="col">Seeker Interested Area</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Which Job?</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Expected qualification for job.</th>
		      <th scope="col" style="background-color:rgba(163, 176, 198, 0.5)">Job area</th>
		      <th scope="col">Action</th>
		      <th scope="col">Status</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (isset($reject)){
		  		if (count($reject)>0){
		  			foreach ($reject as $value) {
		  			?>
					<tr> 
					<td>
						<img class="img round" src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="image" style="height: 30px; width: 30px;">
						</td>
				      <td><?php echo $value->seekername;?></td>
				      <td><?php echo $value->qualification;?></td>
				      <td><?php echo $value->programs;?></td>
				      <td><?php echo $value->salary;?></td>
				      <td><?php echo ucfirst($value->interest);?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobtitle;?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobqualification;?></td>
				      <td style="background-color:rgba(163, 176, 198, 0.5)"><?php echo $value->jobtype;?></td>
				      <td><a href="<?php echo base_url();?>Organization/showUser?personid=<?php echo $value->useruid;?>" style="text-decoration:none"><button class="btn btn-success">View Profile</button></a>
				      </td>
				      <td>
				      	<div class="dropdown">
                             <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span><?php echo ucfirst($value->applyremarks);?></span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?php echo base_url();?>Organization/interviewForm?viewjobid=<?php echo $value->aid;?>" style="text-decoration:none">
                                <button class="dropdown-item" style="padding:0px; margin: 0px; margin-left: 10px;height: 20px;">Call for interview</button></a>
                              </div>
                          </div>
                      </td>
				      
				    </tr>
		  			<?php
		  			}
		  		}
		  		else{
		  			?>
					<td colspan="11">no candiadate rejected</td>
		  			<?php
		  		}
		  		?>
		  		<?php
		  	}
		  	else{
		  		?>
		  		<td colspan="11">no candiadate rejected</td>
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

function divhide1() {
  var x = document.getElementById("interviewlist");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function divhide2() {
  var x = document.getElementById("rejectlist");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>