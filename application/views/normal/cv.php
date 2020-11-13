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
                <h3 class="page-title">Add Logo of company</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Company Logo</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <div>
                             <embed src="<?php echo base_url();?>assets/pdf/cv/<?php echo $normaldata->cv?>" type="application/pdf" width="50%" height="400px"/>
                          </div>
                            <form method="post"  action="<?php echo base_url();?>NormalRole/cvUpdate" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <div class="form-group col-md-10">
                                  <label for="feDescription">View PDF of Your CV</label>
                                  <input type="File" id="pdf-file" name="cv" class="form-control" required accept="application/pdf*"> 
                                  <input type="text" hidden name="uid" value="<?php echo $normaldata->uid;?>">
                                  <input type="text" hidden name="qualification" value="<?php echo $normaldata->qualification;?>">
                                  <input type="text" hidden name="programs" value="<?php echo $normaldata->programs;?>">
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update</button>
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