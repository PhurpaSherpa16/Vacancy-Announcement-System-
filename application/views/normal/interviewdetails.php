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
                <span class="text-uppercase page-subtitle">Interview Overview</span>
                <h3 class="page-title">Information Interview</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Interview has been set, infromation are below. If you think it's not fleasible pelase contact to organization as soon as possible.</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-lg-6">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row" colspan="2" style="background-color: rgba(108, 163, 252,0.4); text-align: center;">Interview Details</th>
                              </tr>
                              <tr>
                                <th scope="row">Organization name</th>
                                <td>: <?php echo $interviewdata->int_orgname ?></a></td>
                              </tr>
                              <tr>
                                <th scope="row">Date </th>
                                <td>: <?php echo $interviewdata->int_date?></td>
                              </tr>
                              <tr>
                                <th scope="row">Description </th>
                                <td>: <?php echo $interviewdata->int_description?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-lg-6">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row" colspan="2" style="background-color: rgba(242, 111, 36,0.4); text-align: center;">Organization Details</th>
                              </tr>
                              <tr>
                                <th scope="row">Conact Person :</th>
                                <td>: <?php echo $alldata->firstname. ' '.$alldata->lastname  ?></a></td>
                              </tr>
                              <tr>
                                <th scope="row">Date :</th>
                                <td>: <?php echo $alldata->email?></td>
                              </tr>
                              <tr>
                                <th scope="row">Phone number</th>
                                <td>: <?php echo $alldata->number?></td>
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
