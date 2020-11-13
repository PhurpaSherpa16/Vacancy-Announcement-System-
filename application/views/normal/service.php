<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'orgnav.php';?>

          <div class="container">
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Service Overview</span>
                <h3 class="page-title">Service that we provide list below.</h3>
              </div>
            </div>
            <div class="container-fluid" style="min-height: 550px;">
              <div class="row col-lg-12" style="margin: 20px;">
                <table class="table table-striped" style="width: 200px;">
                <tbody>
                  <tr>
                    <td><a href="<?php echo base_url();?>Organization/postjob">Post Jobs</a></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url();?>Organization/showeRequest">Manage Activities</a></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url();?>Organization/companyupdate">Update Organization profile</a></td>
                  </tr>
                </tbody>
                </table>
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