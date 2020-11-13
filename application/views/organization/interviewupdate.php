<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php include 'header.php';?>
  </head>
  <body class="h-100">
    <div class="container-fluid">
          <?php include 'orgnav.php';?>

          <div class="container" style="min-height: 550px;">
            <div class="container-fluid">
              <div class="col-lg-8" style="margin: 20px;">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Interview Schedule</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>OrganizationRole/callInterviewUpdate">
                            <input type="text" hidden name="int_id" value="<?php echo $interviewdata->int_id;?>">
                            <input type="text" hidden name="jobid" value="<?php echo $applydata->jobid;?>">
                            <input type="text" hidden name="useruid" value="<?php echo $applydata->useruid;?>">
                            <input type="text" hidden name="organizationname" value="<?php echo $applydata->organizationname;?>">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Seeker Name</label>
                                <input type="text" class="form-control" id="feFirstName" name="firstname" placeholder="First Name ***" value="<?php echo $applydata->seekername;?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Qualification</label>
                                <input type="text" class="form-control" name="qualification" placeholder="Qualification ***" value="<?php echo $applydata->qualification . ' in '. $applydata->programs;?>">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">For which post</label>
                                <input type="text" class="form-control" name="post" placeholder="Input post **" value="<?php echo $applydata->jobtitle;?>"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Date</label>
                                <input type="date" class="form-control" name="date" id="date" value="<?php echo $interviewdata->int_date;?>"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="Enter other related inforation like dress code, location, number or time etc. "><?php echo $interviewdata->int_description;?></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update Call for interview</button>
                          </form>
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
<?php include 'message.php' ;?>
