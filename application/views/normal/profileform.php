<div class="container" role="alert">            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto" id="image">
                      <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $normaldata->image?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $userdata->firstname. ' '. $userdata->lastname;?></h4>
                    <a href="<?php echo base_url();?>Normal/profileUpdate" style="font-size: 13px;">Update Profile Picture</a>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                            <span class="progress-value">74%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span><?php echo $userdata->description;?></span>
                    </li>
                  </ul>
                  <div class="mb-2">
                    <span style="padding: 20px;"><a href="<?php echo base_url();?>Normal/profiledetail">Update</a> Your more details !!!</span>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>NormalRole/profileupdate">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <input type="text" value="<?php echo $userdata->uid;?>" name="uid" hidden>
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" id="feFirstName" name="firstname" placeholder="First Name ***" value="<?php echo $userdata->firstname;?>" autocomplete="off"> 
                                <span id="f_error"></span>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" class="form-control" id="feLastName" name="lastname" autocomplete="off" placeholder="Last Name ***" value="<?php echo $userdata->lastname;?>"> 
                                <span id="l_error"></span>
                              </div>
                                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">Phone</label>
                                <input type="number" class="form-control" name="number" autocomplete="off" id="number" placeholder="Number **" value="<?php echo $userdata->number;?>">
                                <span id="n_error"></span> 
                              </div>
                              <div class="form-group col-md-6">
                                <label >Email</label>
                                <input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Email ***" value="<?php echo $userdata->email;?>">
                                <span id="e_error"></span> 
                              </div>
                              </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" autocomplete="off" placeholder="Define in short about your experience and work area or fresher."><?php echo $userdata->description;?></textarea>
                                <span id="t_error"></span>
                              </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

   <script>
                    $(document).ready(function(){
                    $('#feFirstName').on('keyup', function(){
                    if($('#feFirstName').val().length < 3){
                    $('#f_error').html('***At least 3 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#f_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#feLastName').on('keyup', function(){
                    if($('#feLastName').val().length < 3){
                    $('#l_error').html('***At least 3 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#l_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#number').on('keyup', function(){
                    if($('#number').val().length < 9){
                    $('#n_error').html('***At least 9 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#n_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#email').on('keyup', function(){
                    if($('#email').val().length < 6){
                    $('#e_error').html('***At least 6 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#e_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#description').on('keyup', function(){
                    if($('#description').val().length < 10){
                    $('#t_error').html('***At least 10 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#t_error').html('');
                    }
                    });
                    });
      </script>