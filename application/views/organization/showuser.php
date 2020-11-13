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
                <h3 class="page-title">Information about <?php echo $userdetails->firstname. ' '. $userdetails->lastname;?> </h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                      <div class="mb-3 mx-auto" id="image">
                       <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $userdetails->image?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $userdetails->firstname. ' '. $userdetails->lastname;?></h4>
                    <?php if (isset($remarks)){
                    if($remarks->remarks == 'pending') {
                      ?>
                      <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pending
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo base_url();?>Organization/cancelRequest?viewid=<?php echo $userdetails->uid;?>">Cancel Request</a>

                          </div>
                      </div>
                      <?php
                    }
                      else if ($remarks->remarks == 'friends') {
                        ?>
                        <div class="dropdown">
                          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Friends
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo base_url();?>Organization/requestJob?viewid=<?php echo $userdetails->uid;?>">Request Job</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Organization/blockUser?viewid=<?php echo $userdetails->uid;?>">Block User</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Organization/blockUser?viewid=<?php echo $userdetails->uid;?>">Unfriends</a>
                          </div>
                        </div>
                        <?php
                      }
                      else if($remarks->remarks == 'cancel'){
                        ?>
                        <a href="<?php echo base_url();?>Organization/makeConnectionUpdate?viewid=<?php echo $userdetails->uid;?>"><button type="button" class="btn btn-primary">Make Connection</button></a>
                        <?php
                      }
                    }
                    else{
                      ?>
                <a href="<?php echo base_url();?>Organization/makeConnection?viewid=<?php echo $userdetails->uid;?>&name=<?php echo $orgdata->companyname;?>"><button type="button" class="btn btn-primary">Make Connection</button></a>
                <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Full Name</th>
                                <td>: <?php echo $userdetails->firstname. ' '.$userdetails->lastname; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td>: <?php echo $userdetails->email?></td>
                              </tr>
                              <tr>
                                <th scope="row">Number</th>
                                <td>: <?php echo $userdetails->number?></td>
                              </tr>
                              <tr>
                                <th scope="row">Description</th>
                                <td>: <?php echo $userdetails->description?></td>
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
                      <img class="user-avatar mr-2" src="<?php echo base_url();?>assets/images/<?php echo $userdetails->citizenshipimage?>" alt="User Avatar" style="height: 200px; width: 100%; border:1px solid black">
                    </div>
                    <h5 class="mb-0"><?php echo 'Citizenship Number : '. $userdetails->citizenship?></h5>
                  </div>
                </div>
              </div>


              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Personal Details</h6>
 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Place You Live</th>
                                <td>: <?php echo $userdetails->district;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Education Qulaification</th>
                                <td>: <?php echo $userdetails->qualification;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Programs you are qaulified</th>
                                <td>: <?php echo $userdetails->programs; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Expected Salary</th>
                                <td>: <?php echo $userdetails->salary?></td>
                              </tr>
                              <tr>
                                <th scope="row">Work Experience</th>
                                <td>: <?php echo $userdetails->workexperience?></td>
                              </tr>
                              <tr>
                                <th scope="row">Year of work</th>
                                <td>: <?php echo $userdetails->experience?></td>
                              </tr>
                              <tr>
                                <th scope="row">Interest of working area:</th>
                                <td>: <?php echo ucwords($userdetails->interest);?></td>
                              </tr>
                              <tr>
                                <th scope="row">Do you Know riding or driving</th>
                                <td>: <?php echo $userdetails->vehicle?></td>
                              </tr>
                              <tr>
                                <th scope="row">Which one? </th>
                                <td>: <?php echo $userdetails->vehicletype?></td>
                              </tr>
                              <tr>
                                <th scope="row">Other Personal Details</th>
                                <td>: <?php echo $userdetails->personaldetails?></td>
                              </tr>
                              <tr>
                                <th scope="row">CV</th>
                                <td><a href="<?php echo base_url();?>assets/pdf/cv/<?php echo $userdetails->cv?>" title="downloadable file of CV">: Your CV</a></td>
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

          <?php include 'footer.php';?>

        </main>
      </div>
    </div> 
  </body>
</html>

<?php include 'message.php';?>