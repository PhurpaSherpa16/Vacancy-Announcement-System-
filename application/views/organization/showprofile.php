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
                       <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $orgdata->image?>" alt="User Avatar" style="height: 200px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $userdata->firstname. ' '. $userdata->lastname;?></h4>
                    <a href="<?php echo base_url();?>Organization/logoupdate" style="font-size: 13px;">Update Profile Picture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Infromation <a href="<?php echo base_url();?>Organization/profileupdate" style="margin-left: 20px;"><i class="material-icons" title="Update">create</i></a></h6>
 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Full Name</th>
                                <td><?php echo ' : '.$userdata->firstname. ' '.$userdata->lastname; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Email </th>
                                <td><?php echo ' : '.$userdata->email?></td>
                              </tr>
                              <tr>
                                <th scope="row">Number </th>
                                <td><?php echo ' : '.$userdata->number?></td>
                              </tr>
                              <tr>
                                <th scope="row">Description</th>
                                <td><?php echo ' : '.$userdata->description?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Other Infromation <a href="<?php echo base_url();?>Organization/companyupdate" style="margin-left: 20px;"><i class="material-icons" title="Update">create</i></a></h6>
 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">Name of Company</th>
                                <td><?php echo ' : '.$orgdata->companyname;?></td>
                              </tr>
                              <tr>
                              <tr>
                                <th scope="row">Organization Type </th>
                                <td><?php echo  ' : '.$orgdata->companytype?></td>
                              </tr>
                                <th scope="row">Website Link </th>
                                <td><?php echo  ' : '.$orgdata->companylink;?></td>
                              </tr>
                              <tr>
                                <th scope="row">Primary Number</th>
                                <td><?php echo  ' : '.$orgdata->primarynumber; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Secondary Number </th>
                                <td><?php echo  ' : '.$orgdata->secondarynumber?></td>
                              </tr>
                              <tr>
                                <th scope="row">Primary email address</th>
                                <td><?php echo  ' : '.$orgdata->primaryemail?></td>
                              </tr>
                              <tr>
                                <th scope="row">Secondary email address </th>
                                <td><?php echo  ' : '.$orgdata->secondaryemail?></td>
                              </tr>
                              <tr>
                                <th scope="row">Location of Company</th>
                                <td><?php echo  ' : '.$orgdata->city?></td>
                              </tr>
                              <tr>
                                <th scope="row">District </th>
                                <td><?php echo  ' : '.$orgdata->district?></td>
                              </tr>
                              <tr>
                                <th scope="row">Moto of Company</th>
                                <td><?php echo  ' : '.$orgdata->moto?></td>
                              </tr>
                              <tr>
                              <tr>
                                <th scope="row">Description of Company</th>
                                <td><?php echo  ' : '.$orgdata->description?></td>
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