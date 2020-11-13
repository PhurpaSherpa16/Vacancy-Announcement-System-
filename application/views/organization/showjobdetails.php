<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'orgnav.php';?>
          <div class="container" role="alert" style="min-height: 600px;">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Information about <?php echo $jobdetails->companyname;?></h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                      <div class="mb-3 mx-auto" id="image">
                       <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $jobdetails->image?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $jobdetails->companyname;?></h4>
                    <span style="font-size: 12px;"><a href="#" onclick="myFunction()">Click to view</a> More Details of Organization</span>
                  </div>
                </div>
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Organization Contact Details</h6>
                  </div>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th scope="row">Contact Person</th>
                        <td><?php echo ':'.$jobdetails->firstname.' '. $jobdetails->lastname;?></td>
                      </tr>
                      <tr>
                        <th scope="row">Email</th>
                        <td><?php echo ':'.$jobdetails->email;?></td>
                      </tr>
                      <tr>
                        <th scope="row">Ph. Number</th>
                        <td><?php echo ':'.$jobdetails->number;?></td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Jobs details and information </h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Job Title</th>
                                <td><?php echo ':'.$jobdetails->jobtitle;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Job Sector </th>
                                <td><?php echo ' : '.$jobdetails->jobtype;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Qualification </th>
                                <td><?php echo ' : '.$jobdetails->jobqualification; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Programs </th>
                                <td><?php echo ' : '.$jobdetails->programs; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">min.Experience </th>
                                <td><?php echo ' : '.$jobdetails->experience. ' years';?></td>
                              </tr> 
                              <tr>
                                <th scope="row">Position </th>
                                <td><?php echo ' : '.$jobdetails->position;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Deadline </th>
                                <td><?php echo ' : '.$jobdetails->deadline;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Posted Date </th>
                                <td><?php echo ' : '.$jobdetails->postdate;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Salary </th>
                                <td><?php echo ' : '.$jobdetails->salary;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Job Description </th>
                                <td><?php echo ' : '.$jobdetails->jobdescription;?></td>
                              </tr>
                              <tr>
                                <th scope="row">PDF of Jobs </th>
                                <td><a href="<?php echo base_url();?>assets/pdf/<?php echo $jobdetails->jobpdffile?>" title="downloadable file of jobdetails"> : Your Job Details</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
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
                                <td><?php echo ':'.$jobdetails->companyname;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Company Websiste </th>
                                <td>:<a href="<?php echo $jobdetails->companylink;?>" title="<?php echo $jobdetails->companylink;?>" target="_blank"><?php echo $jobdetails->companylink;?></a></td>
                              </tr>
                              <tr>
                                <th scope="row">Location of Company</th>
                                <td><?php echo  ' : '.$jobdetails->city?></td>
                              </tr>
                              <tr>
                                <th scope="row">District </th>
                                <td><?php echo  ' : '.$jobdetails->district?></td>
                              </tr>
                              <tr>
                                <th scope="row">Organization Type </th>
                                <td><?php echo  ' : '.$jobdetails->companytype?></td>
                              <tr>
                                <th scope="row">Primary Number</th>
                                <td><?php echo  ' : '.$jobdetails->primarynumber; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Secondary Number </th>
                                <td><?php echo  ' : '.$jobdetails->secondarynumber?></td>
                              </tr>
                              <tr>
                                <th scope="row">Primary email address</th>
                                <td><?php echo  ' : '.$jobdetails->primaryemail?></td>
                              </tr>
                              <tr>
                                <th scope="row">Secondary email address </th>
                                <td><?php echo  ' : '.$jobdetails->secondaryemail?></td>
                              </tr>
                              <tr>
                                <th scope="row">Moto of Company</th>
                                <td><?php echo  ' : '.$jobdetails->moto?></td>
                              </tr>
                              <tr>
                              <tr>
                                <th scope="row">Description of Company</th>
                                <td><?php echo  ' : '.$jobdetails->description?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
            </div>
          <?php include 'footer.php';?>

        </main>
      </div>
    </div> 
  </body>
</html>
<script>
function myFunction() {
  var x = document.getElementById("details");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>