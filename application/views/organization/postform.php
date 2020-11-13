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
                          <form method="post" action="<?php echo base_url();?>Job/postjob" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Job title</label>
                                <input type="text" class="form-control" name="jobtitle" id="jobtitle" placeholder="Job Name ***" value="" required>
                                <span id="jobtitle_error"></span>
                                <input type="text" hidden class="form-control" name="uid" placeholder="Job Name ***" value="<?php echo $userdata->uid; ?>"> 
                                <input type="text" hidden id="currentdate" class="form-control" name="date"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label>Job Sector</label>
                                <select class="form-control" name="jobtype" required>
                                  <option value="IT">IT</option>
                                  <option value="Hotel">Hotle</option>
                                  <option value="School">School</option>
                                  <option value="Bank">Bank</option>
                                  <option value="Engenering">Engenering</option>
                                </select> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">Eduacation Qualification</label>
                                <select class="form-control" name="qualification" required>
                                  <option value="SLC">Minium SLC</option>
                                  <option value="Higher Secondary (+2)">Minium plus two</option>
                                  <option value="Bachlore">Bachlore</option>
                                  <option value="Master">Master</option>
                                  <option value="PHD">PHD</option>
                                </select> 
                              </div>
                              <div class="form-group col-md-6">
                                <label>Porgrams</label>
                                <select class="form-control" name="programs" required>
                                  <option value="IT">IT</option>
                                  <option value="Business">Business</option>
                                  <option value="School">Hotel</option>
                                  <option value="Sociology">Sociology</option>
                                  <option value="Engenering">Engenering</option>
                                  <option value="Education">Education</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Position</label>
                                <input type="text" class="form-control" name="position" id="position" placeholder="Position **" required>
                                <span id="position_error"></span>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Experiecne</label>
                                <select class="form-control" name="experience" required>
                                  <option value="1">Minium 1 year</option>
                                  <option value="2">Minium 2 year</option>
                                  <option value="3">More than 3 year</option>
                                  <option value="5">Atleast 5 year</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feDescription">Job  Deadline</label>
                                <input type="date" class="form-control" name="deadline" placeholder="Deadline **" required >
                                <label for="feDescription">Job details PDF</label>
                                <input type="File" name="jobpdffile" class="form-control" required>
                                <label>Vechile require</label>
                                <select class="form-control" name="vechile" required>
                                  <option value="None">None</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label>Salary Offer</label>
                                <input type="number" class="form-control" name="salary" id="salary" placeholder="Salary ***" value="" required>
                                <span id="salary_error"></span>
                                <label for="feDescription">Job Description</label>
                                <pre><textarea class="form-control" name="jobdescription" id="job" rows="5" placeholder="Define Job Roles ***" required></textarea></pre>
                                <span id="job_error"></span>
                              </div>
                            </div>
                            <div class="form-row">
                              <button type="submit" class=" form-control btn btn-accent">Post</button>
                            </div> 
                          </form>
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

                    $(document).ready(function(){
                    $('#jobtitle').on('keyup', function(){
                    if($('#jobtitle').val().length < 4){
                    $('#jobtitle_error').html('***At least 4 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#jobtitle_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#position').on('keyup', function(){
                    if($('#position').val().length < 4){
                    $('#position_error').html('***At least 4 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#position_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#salary').on('keyup', function(){
                    if($('#salary').val().length < 4){
                    $('#salary_error').html('***At least 4 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#salary_error').html('');
                    }
                    });
                    });
                    $(document).ready(function(){
                    $('#job').on('keyup', function(){
                    if($('#job').val().length < 9){
                    $('#job_error').html('***At least 9 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#job_error').html('');
                    }
                    });
                    });
      </script>