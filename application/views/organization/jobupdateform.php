
<div class="container" role="alert">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add details of jobs</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Job Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>Job/jobUpdate" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Job title</label>
                                <input type="text" class="form-control" name="jobtitle" placeholder="Job Name ***" value="<?php echo $jobdata->jobtitle;?>" required>
                                <input type="text" hidden class="form-control" name="uid" placeholder="Job Name ***" value="<?php echo $userdata->uid; ?>"> 
                                <input type="text" hidden value="<?php echo $jobdata->postdate;?>" class="form-control" name="date">
                                <input type="text" hidden value="<?php echo $jobdata->jobid;?>" name="jid">
                                <input type="text" hidden id="currentdate" class="form-control" name="update"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label>Job Sector</label>
                                <select class="form-control" name="jobtype" required>
                                  <option value="IT" <?php if ($jobdata->jobtype=='IT'){
                                    echo 'selected';
                                  }?>>IT</option>
                                  <option value="Hotel" <?php if ($jobdata->jobtype=='Hotel'){
                                    echo 'selected';
                                  }?>>Hotle</option>
                                  <option value="School" <?php if ($jobdata->jobtype=='School'){
                                    echo 'selected';
                                  }?>>School</option>
                                  <option value="Bank" <?php if ($jobdata->jobtype=='Bank'){
                                    echo 'selected';
                                  }?>>Bank</option>
                                  <option value="Engenering" <?php if ($jobdata->jobtype=='Engenering'){
                                    echo 'selected';
                                  }?>>Engenering</option>
                                </select> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">Eduacation Qualification</label>
                                <select class="form-control" name="qualification" required>
                                  <option value="SLC" <?php if ($jobdata->jobqualification=='SLC'){
                                    echo 'selected';
                                  }?>>Minium SLC</option>
                                  <option value="Higher Secondary (+2)" <?php if ($jobdata->jobqualification=='Higher Secondary (+2)'){
                                    echo 'selected';
                                  }?>>Minium plus two</option>
                                  <option value="Bachlore"  <?php if ($jobdata->jobqualification=='Bachlore'){
                                    echo 'selected';
                                  }?>>Bachlore</option>
                                  <option value="Master"  <?php if ($jobdata->jobqualification=='Master'){
                                    echo 'selected';
                                  }?>>Master</option>
                                  <option value="PHD"  <?php if ($jobdata->jobqualification=='PHD'){
                                    echo 'selected';
                                  }?>>PHD</option>
                                </select> 
                              </div>
                              <div class="form-group col-md-6">
                                <label>Porgrams</label>
                                <select class="form-control" name="programs" required>
                                  <option value="IT" <?php if ($jobdata->programs=='IT'){
                                    echo 'selected';
                                  }?>>IT</option>
                                  <option value="Business" <?php if ($jobdata->programs=='Business'){
                                    echo 'selected';
                                  }?>>Business</option>
                                  <option value="Hotel" <?php if ($jobdata->programs=='Hotel'){
                                    echo 'selected';
                                  }?>>Hotel</option>
                                  <option value="Sociology" <?php if ($jobdata->programs=='Sociology'){
                                    echo 'selected';
                                  }?>>Sociology</option>
                                  <option value="Engenering" <?php if ($jobdata->programs=='Engenering'){
                                    echo 'selected';
                                  }?>>Engenering</option>
                                  <option value="Education" <?php if ($jobdata->programs=='Education'){
                                    echo 'selected';
                                  }?>>Education</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Position</label>
                                <input type="text" class="form-control" name="position" placeholder="Position **" required value="<?php echo $jobdata->position;?>"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Experiecne</label>
                                <select class="form-control" name="experience" required>
                                  <option value="1" <?php if ($jobdata->experience=='1'){
                                    echo 'selected';
                                  }?>>Minium 1 year</option>
                                  <option value="2" <?php if ($jobdata->experience=='2'){
                                    echo 'selected';
                                  }?>>Minium 2 year</option>
                                  <option value="3" <?php if ($jobdata->experience=='3'){
                                    echo 'selected';
                                  }?>>More than 3 year</option>
                                  <option value="5" <?php if ($jobdata->experience=='5'){
                                    echo 'selected';
                                  }?>>Atleast 5 year</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feDescription">Job  Deadline</label>
                                <input type="date" class="form-control" name="deadline" placeholder="Deadline **" required value="<?php echo $jobdata->deadline;?>"> 
                                <label for="feDescription">Job details PDF</label>
                                <input type="File" name="jobpdffile" required class="form-control">
                                <label>Vechile require</label>
                                <select class="form-control" name="vechile" required>
                                  <option value="None" <?php if ($jobdata->vechile=='None'){
                                    echo 'selected';
                                  }?>>None</option>
                                  <option value="Yes" <?php if ($jobdata->vechile=='Yes'){
                                    echo 'selected';
                                  }?>>Yes</option>
                                  <option value="No" <?php if ($jobdata->vechile=='No'){
                                    echo 'selected';
                                  }?>>No</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label>Salary Offer</label>
                                <input type="number" class="form-control" name="salary" placeholder="Salary ***" value="<?php echo $jobdata->salary;?>" required>
                                <label for="feDescription">Job Description</label>
                                <pre><textarea class="form-control" name="jobdescription" rows="5" placeholder="Define Job Roles ***" required><?php echo $jobdata->jobdescription; ?></textarea></pre>
                              </div>
                            </div>
                            <div class="form-row">
                              <button type="submit" name="update" class=" form-control btn btn-accent" style="margin-right: 5px;margin-left: 5px;">Update</button>
                            </div>
                          </form>
                          <a href="<?php echo base_url();?>Job/removeJob?remove=<?php echo $jobdata->jobid;?>"><button type="button" class=" form-control btn btn-danger">Remove Product</button></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

      <script>
              var date= new Date();
              var dd= date.getDate();
              var mm= date.getMonth();
              var yyyy = date.getFullYear();
              date= yyyy +'-'+ mm +'-'+ dd;
              document.getElementById('currentdate').value=date;
      </script>