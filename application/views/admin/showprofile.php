<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'adminnav.php';?>
          
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
                       <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/admin.png?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $userdata->firstname. ' '. $userdata->lastname;?></h4>
                    <a href="<?php echo base_url();?>Normal/profileUpdate" style="font-size: 13px;">Update Profile Picture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Infromation <a href="<?php echo base_url();?>Admin/profile" style="margin-left: 20px;"><i class="material-icons" title="Update">create</i></a></h6>
 
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

          <?php include 'footer.php' ?>
        </main>
      </div>
    </div> 
  </body>
</html>

<?php include 'message.php';?>