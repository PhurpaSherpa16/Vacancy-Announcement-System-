<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'normalnav.php';?>

          <div class="container" role="alert">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add Citizenship Picture</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Citizenship Picture</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post"  action="<?php echo base_url();?>NormalRole/registerProfileCitizenship" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Please! upload both side of citizenship by scanning</label>
                                <div class="form-group col-md-10">
                                  <?php if (isset($normaldata->image)) {
                                    ?>
                                       <img class="user-avatar mr-2" src="<?php echo base_url();?>assets/images/<?php echo $normaldata->citizenshipimage?>" alt="User Avatar" style="height: 400px; width: 400px;">
                                    <?php
                                }
                                else{
                                  ?>
                                     <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/custom/images/avatars/user.png" alt="User Avatar" style="height: 400px; width: 400px;">
                                  <?php
                                }
                                ?>
                                </div>
                                <input type="file" class="form-control" name="image"  accept="image/*">
                                <input type="text" name="uid" value="<?php echo $userdata->uid;?>" hidden class="form-control">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Register Citizenship</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>Organization">Home</a>
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
                <a class="nav-link" href="<?php echo base_url();?>Navigation/logout" style="color: #d60a1b;">Logout</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2019
            </span>
          </footer>
        </main>
      </div>
    </div> 
  </body>
</html>

<script>
  $(":file").on("change", function(e) {

  console.log(this.files[0].type);
  
})
</script>