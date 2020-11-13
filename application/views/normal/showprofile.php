<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'normalnav.php';?>
          
          <div class="container" role="alert" style="min-height: 600px;">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Information about you</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                      <div class="mb-3 mx-auto" id="image">
                       <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $normaldata->image?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $userdata->firstname. ' '. $userdata->lastname;?></h4>
                    <a href="<?php echo base_url();?>Normal/profileUpdate" style="font-size: 13px;">Update Profile Picture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Infromation <a href="<?php echo base_url();?>Normal/profile" style="margin-left: 20px;"><i class="material-icons" title="Update">create</i></a></h6>
 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Full Name :</th>
                                <td><?php echo $userdata->firstname. ' '.$userdata->lastname; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Email :</th>
                                <td><?php echo $userdata->email?></td>
                              </tr>
                              <tr>
                                <th scope="row">Number :</th>
                                <td><?php echo $userdata->number?></td>
                              </tr>
                              <tr>
                                <th scope="row">Description :</th>
                                <td><?php echo $userdata->description?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto" id="image">
                      <img class="user-avatar mr-2" src="<?php echo base_url();?>assets/images/<?php echo $normaldata->citizenshipimage?>" alt="User Avatar" style="height: 200px; width: 100%; border:1px solid black">
                    </div>
                    <h5 class="mb-0"><?php echo 'Citizenship Number : '. $normaldata->citizenship?></h5>
                    <a href="<?php echo base_url();?>Normal/citizenshipregister">Register Your Citizenship</a>
                  </div>
                </div>
              </div>


              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Other Infromation <a href="<?php echo base_url();?>Normal/profiledetail" style="margin-left: 20px;"><i class="material-icons" title="Update">create</i></a></h6>
 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Place You Live :</th>
                                <td><?php echo $normaldata->district;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Education Qulaification :</th>
                                <td><?php echo 'Completed '.$normaldata->qualification;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Programs you are qaulified :</th>
                                <td><?php echo $normaldata->programs; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Expected Salary :</th>
                                <td><?php echo $normaldata->salary?></td>
                              </tr>
                              <tr>
                                <th scope="row">Work Experience :</th>
                                <td><?php echo $normaldata->workexperience?></td>
                              </tr>
                              <tr>
                                <th scope="row">Year of work :</th>
                                <td><?php echo $normaldata->experience?></td>
                              </tr>
                              <tr>
                                <th scope="row">Interest of working area:</th>
                                <td><?php echo ucwords($normaldata->interest);?></td>
                              </tr>
                              <tr>
                                <th scope="row">Do you Know riding or driving:</th>
                                <td><?php echo $normaldata->vehicle?></td>
                              </tr>
                              <tr>
                                <th scope="row">Which one? </th>
                                <td><?php echo $normaldata->vehicletype?></td>
                              </tr>
                              <tr>
                                <th scope="row">Other Personal Details :</th>
                                <td><?php echo $normaldata->personaldetails?></td>
                              </tr>
                              <tr>
                                <th scope="row">CV :</th>
                                <td><a href="<?php echo base_url();?>assets/pdf/cv/<?php echo $normaldata->cv?>" title="downloadable file of CV">Your CV</a></td>
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

          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>Normal">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>Navigation/logout">Logout</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
          </footer>
        </main>
      </div>
    </div> 
  </body>
</html>

<?php include 'message.php';?>