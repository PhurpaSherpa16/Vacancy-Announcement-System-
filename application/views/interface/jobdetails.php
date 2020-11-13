<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobFinder.com</title>
  	<?php include 'header.php'?>
</head>
<body>
   <?php include 'interfacenav.php'?>
   <div class="body" style="min-height: 650px; padding: 100px;">
      <div class="conatiner">
      	<div class="page-header row no-gutters py-4">
      		<div class="col-lg-4" style="padding: 5px;">
      			<div class="col-lg-12 col-sm-4 text-center text-sm-left mb-0">
                	<span class="text-uppercase page-subtitle">Overview</span><br>
                	<strong style="font-size: 15px;">Information about organization and *Note: to apply for job you need to be signed in or 	register.</strong></span>
            	</div>
              	<div class="card-header border-bottom text-center col-lg-12">
                    <div class="mb-3 mx-auto" id="image">
                       <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $job->image?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $job->companyname;?></h4>
                    <span style="font-size: 12px;"><a href="#" onclick="myFunction()">Click to view</a> More Details of Organization</span><br>
                    <button type="submit" onclick="loginRegister()" class="btn btn-success" style="margin: 5px; border-radius: 10px;">Apply</button>
              	</div>
      		</div>
      		<div class="col-lg-8">
                <div class="card card-small mb-4" style="padding: 5px;">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Jobs details and information</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Job Title</th>
                                <td><?php echo ':'.$job->jobtitle;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Job Sector </th>
                                <td><?php echo ' : '.$job->jobtype;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Qualification </th>
                                <td><?php echo ' : '.$job->jobqualification; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Programs </th>
                                <td><?php echo ' : '.$job->programs; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">min.Experience </th>
                                <td><?php echo ' : '.$job->experience. ' years';?></td>
                              </tr> 
                              <tr>
                                <th scope="row">Position </th>
                                <td><?php echo ' : '.$job->position;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Deadline </th>
                                <td><?php echo ' : '.$job->deadline;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Posted Date </th>
                                <td><?php echo ' : '.$job->postdate;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Salary </th>
                                <td><?php echo ' : '.$job->salary;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Job Description </th>
                                <td><?php echo ' : '.$job->jobdescription;?></td>
                              </tr>
                              <tr>
                                <th scope="row">PDF of Jobs </th>
                                <td><a href="<?php echo base_url();?>assets/pdf/<?php echo $job->jobpdffile?>" title="downloadable file of job"> : Your Job Details</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
         </div>
         <div class="col-lg-12" id="details" style="display:none">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Organization Information</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Name of Company</th>
                                <td><?php echo ':'.$job->companyname;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Company Websiste </th>
                                <td>:<a href="<?php echo $job->companylink;?>" title="<?php echo $job->companylink;?>" target="_blank"><?php echo $job->companylink;?></a></td>
                              </tr>
                              <tr>
                                <th scope="row">Location of Company</th>
                                <td><?php echo  ' : '.$job->city?></td>
                              </tr>
                              <tr>
                                <th scope="row">District </th>
                                <td><?php echo  ' : '.$job->district?></td>
                              </tr>
                              <tr>
                                <th scope="row">Organization Type </th>
                                <td><?php echo  ' : '.$job->companytype?></td>
                              <tr>
                                <th scope="row">Primary Number</th>
                                <td><?php echo  ' : '.$job->primarynumber; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Secondary Number </th>
                                <td><?php echo  ' : '.$job->secondarynumber?></td>
                              </tr>
                              <tr>
                                <th scope="row">Primary email address</th>
                                <td><?php echo  ' : '.$job->primaryemail?></td>
                              </tr>
                              <tr>
                                <th scope="row">Secondary email address </th>
                                <td><?php echo  ' : '.$job->secondaryemail?></td>
                              </tr>
                              <tr>
                                <th scope="row">Moto of Company</th>
                                <td><?php echo  ' : '.$job->moto?></td>
                              </tr>
                              <tr>
                              <tr>
                                <th scope="row">Description of Company</th>
                                <td><?php echo  ' : '.$job->description?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      </div>

   </div>
    <?php include 'footer.php'?>
</body>
</html>
<?php include 'message.php';?>
<script>
function myFunction() {
  var x = document.getElementById("details");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function loginRegister() {
  alert("You need to login or Register to apply for jobs, Thank you!!!");
}
</script>