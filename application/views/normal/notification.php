<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'normalnav.php';?>

          <div class="container" style="min-height: 550px;">
            <div class="container-fluid">
              <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Notification overview</span>
                <h3 class="page-title">You can View all notification</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Here You will get all notification including frend request from organization and etc.</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-lg-6">
                            <table id="table_id" class="display table table-striped">
                            <thead>
                              <tr>
                                <th scope="row" colspan="2" style="background-color: rgba(108, 163, 252,0.4); text-align: center;">Request From Organization</th>
                              </tr>
                                <tr>
                                    <th>Organization name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                              if (isset($getconnection)){
                                foreach ($getconnection as $value) {
                                     ?>
                              <tr>
                                <td> <a href="<?php echo base_url();?>Normal/showJobDetails?viewjobid=<?php echo $value->oid;?>"><?php echo $value->companyname ?></a></td>
                                <td ><a href="<?php echo base_url();?>Normal/updateconnectionFromNormal?organization_id=<?php echo $value->oid;?>"><button class="btn btn-success">Accept</button></a> <a href="<?php echo base_url();?>Normal/updateconnectionCancelNormal?organization_id=<?php echo $value->oid;?>"><button class="btn btn-warning">Cancel</button></a> </td>
                              </tr>
                              <?php
                                }
                               } 
                               else{
                                ?>
                              <tr>
                                <td scope="row" colspan="2">No Request</td>
                              </tr>
                                <?php
                               }
                              ?>
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
<?php include 'message.php' ;?>

<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>