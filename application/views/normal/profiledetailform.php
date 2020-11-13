<?php if (isset($normaldata)){
?>
<div class="container" role="alert">
            <!-- Page Header -->
             <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add More details of your's</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Personal Details</h6>
                      <span><a href="<?php echo base_url();?>Normal/updateCV">Update</a> <strong style="font-size: 13px;">CV, your cv will plays a vital role so please, update it as latest with activement, interest and other important.<a href="https://cdn.shopify.com/s/files/1/0453/4797/files/Finance_CV_1_81e51216-5182-4a24-a516-4ac8e6b74118.png?v=1532357145" target="_blank"> Sample</a>, You can view, Note it's just a sample, you can create with own creativity with required details.</strong></span>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>NormalRole/profileDetails" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Citizenship Number</label>
                                <input type="text" class="form-control" id="citzen" name="citizenship" placeholder="Citizenship number **" required value="<?php echo $normaldata->citizenship?>">
                                <span id="citzen_error"></span>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="number">District you live</label>
                                 <input type="text" class="form-control" id="location" name="district" placeholder="Kathmandu, Pokhara, Bhakatapur ect. **" required value="<?php echo $normaldata->district; ?>">
                                 <span id="location_error"></span>
                              </div>
                            </div>                            
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Input Highest Education Qualification</label>
                                <select class="form-control" name="qualification" required>
                                  <option value="PHD" <?php if ($normaldata->qualification=='PHD'){
                                    echo 'selected';
                                  }?>
                                  >PHD</option>
                                  <option value="Master" <?php if ($normaldata->qualification=='Master'){
                                    echo 'selected';
                                  }?> >Master</option>
                                  <option value="Bachlore" <?php if ($normaldata->qualification=='Bachlore'){
                                    echo 'selected';
                                  }?> >Bachlore</option>
                                  <option value="Highschool" <?php if ($normaldata->qualification=='Highschool'){
                                    echo 'selected';
                                  }?>>Higher School</option>
                                  <option value="SLC" <?php if ($normaldata->qualification=='SLC'){
                                    echo 'selected';
                                  }?>>SLC</option>
                                </select>
                                <input type="text" hidden class="form-control" name="uid" placeholder="Job Name ***" value="<?php echo $userdata->uid; ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label>In which Programs</label>
                                <input type="text" class="form-control" id="programs" name="programs" placeholder="Ex. IT, Engeneering, Hotel, Bank, Education etc. **" required value="<?php echo $normaldata->programs?>"> 
                                <span id="programs_error"></span>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">Work Experiecne</label>
                                 <input type="text" class="form-control" id="exp" name="workexperience" placeholder="Enter Field you had worked or if not leave N/A **" required value="<?php echo $normaldata->workexperience?>">
                                 <span id="exp_error"></span>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">How many year do you work?</label>
                                <select class="form-control" name="experience" required>
                                  <option value="none" <?php if ($normaldata->experience=='none'){
                                    echo 'selected';
                                  }?> >None</option>
                                  <option value="1" <?php if ($normaldata->experience=='1'){
                                    echo 'selected';
                                  }?>>1 year</option>
                                  <option value="2" <?php if ($normaldata->experience=='2'){
                                    echo 'selected';
                                  }?>>2 year</option>
                                  <option value="3" <?php if ($normaldata->experience=='3'){
                                    echo 'selected';
                                  }?>>More than 3 year</option>
                                  <option value="5" <?php if ($normaldata->experience=='5'){
                                    echo 'selected';
                                  }?>>More than 5 year</option>
                                </select>  
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="fePassword">Interested In Field?</label>
                                <select class="form-control" name="interest" required>
                                  <option value="none" <?php if ($normaldata->interest=='none'){
                                    echo 'selected';
                                  }?> >None</option>
                                  <option value="educational" <?php if ($normaldata->interest=='educational'){
                                    echo 'selected';
                                  }?>>Educational Sector</option>
                                  <option value="hotel" <?php if ($normaldata->interest=='hotel'){
                                    echo 'selected';
                                  }?>>Hotel</option>
                                  <option value="it" <?php if ($normaldata->interest=='it'){
                                    echo 'selected';
                                  }?>>IT field</option>
                                  <option value="bank" <?php if ($normaldata->interest=='bank'){
                                    echo 'selected';
                                  }?>>Bank</option>
                                  <option value="marketing" <?php if ($normaldata->interest=='marketing'){
                                    echo 'selected';
                                  }?>>Marketing</option>
                                </select>  
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Expected salary</label>
                                <select class="form-control" name="salary" required>
                                  <option value="none" <?php if ($normaldata->salary=='none'){
                                    echo 'selected';
                                  }?> >None</option>
                                  <option value="negotiable" <?php if ($normaldata->salary=='negotiable'){
                                    echo 'selected';
                                  }?>>Negotiable</option>
                                  <option value="10,000" <?php if ($normaldata->salary=='10,000'){
                                    echo 'selected';
                                  }?>>More than 10,000</option>
                                  <option value="20,000" <?php if ($normaldata->salary=='20,000'){
                                    echo 'selected';
                                  }?>>More than 20,000</option>
                                  <option value="30,000" <?php if ($normaldata->salary=='30,000'){
                                    echo 'selected';
                                  }?>>More than 30,000</option>
                                  <option value="50,000" <?php if ($normaldata->salary=='50,000'){
                                    echo 'selected';
                                  }?>>More than 50,000</option>
                                </select>  
                              </div>

                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Do you know riding</label>
                                <select class="form-control" name="vehicle" required>
                                  <option value="None" <?php if ($normaldata->vehicle=='None'){
                                    echo 'selected';
                                  }?>>None</option>
                                  <option value="Yes" <?php if ($normaldata->vehicle=='Yes'){
                                    echo 'selected';
                                  }?>>Yes</option>
                                  <option value="No" <?php if ($normaldata->vehicle=='No'){
                                    echo 'selected';
                                  }?>>No</option>
                                </select>
                                <label>Vehicle You can run</label>
                                <select class="form-control" name="vehicletype" required>
                                  <option value="none" <?php if ($normaldata->vehicletype=='None'){
                                    echo 'selected';
                                  }?>>None</option>
                                  <option value="both" <?php if ($normaldata->vehicletype=='both'){
                                    echo 'selected';
                                  }?>>Both</option>
                                  <option value="four" <?php if ($normaldata->vehicletype=='four'){
                                    echo 'selected';
                                  }?>>4 Wheeler</option>
                                  <option value="two" <?php if ($normaldata->vehicletype=='two'){
                                    echo 'selected';
                                  }?>>2 Wheeler</option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="feDescription">Personal Details</label>
                                <pre><textarea class="form-control" id="details" name="personaldetails" rows="5" placeholder="Achievement, your extra knowlwdge ect. ***" required><?php echo $normaldata->personaldetails?></textarea></pre>
                                <span id="details_error"></span>
                              </div>
                            </div>
                            <div class="form-row">
                              <button type="submit" class=" form-control btn btn-accent">Update</button>
                            </div>
                            
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
<?php }
else{
?>

<div class="container" role="alert">
            <!-- Page Header -->
             <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add More details of your's</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Personal Details</h6>
                      <span><a href="<?php echo base_url();?>Normal/updateCV">Update</a>,  Your CV</span>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>NormalRole/profileDetails" enctype="multipart/form-data">
                             <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Citizenship Number</label>
                                <input type="text" class="form-control" id="citzen" name="citizenship" placeholder="Citizenship number **" required>
                                <span id="citzen_error"></span>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="number">District you live</label>
                                 <input type="text" class="form-control" id="location" name="district" placeholder="Kathmandu, Pokhara, Bhakatapur ect. **" required>
                                 <span id="location_error"></span>
                              </div>
                            </div>                            
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Input Highest Education Qualification</label>
                                <select class="form-control" name="qualification" required>
                                  <option value="PHD">PHD</option>
                                  <option value="Master">Master</option>
                                  <option value="Bachlore">Bachlore</option>
                                  <option value="Highschool">Higher School</option>
                                  <option value="SLC">SLC</option>
                                </select>
                                <input type="text" hidden class="form-control" name="uid" placeholder="Job Name ***">
                              </div>
                              <div class="form-group col-md-6">
                                <label>In which Programs</label>
                                <input type="text" class="form-control" id="programs" name="programs" placeholder="Ex. IT, Engeneering, Hotel, Bank, Education etc. **" required> 
                                <span id="programs_error"></span>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">Work Experiecne</label>
                                 <input type="text" class="form-control" id="exp" name="workexperience" placeholder="Enter Field you had worked or if not leave N/A **" required>
                                 <span id="exp_error"></span>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">How many year do you work?</label>
                                <select class="form-control" name="experience" required>
                                  <option value="none">None</option>
                                  <option value="1">1 year</option>
                                  <option value="2">2 year</option>
                                  <option value="3">More than 3 year</option>
                                  <option value="5">More than 5 year</option>
                                </select>  
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="fePassword">Interested In Field?</label>
                                <select class="form-control" name="interest" required>
                                  <option value="none">None</option>
                                  <option value="educational">Educational Sector</option>
                                  <option value="hotel">Hotel</option>
                                  <option value="it">IT field</option>
                                  <option value="bank">Bank</option>
                                  <option value="marketing">Marketing</option>
                                </select>  
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Expected salary</label>
                                <select class="form-control" name="salary" required>
                                  <option value="none">None</option>
                                  <option value="negotiable">Negotiable</option>
                                  <option value="10,000">More than 10,000</option>
                                  <option value="20,000">More than 20,000</option>
                                  <option value="30,000">More than 30,000</option>
                                  <option value="50,000">More than 50,000</option>
                                </select>  
                              </div>

                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Do you know riding</label>
                                <select class="form-control" name="vehicle" required>
                                  <option value="None">None</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                                <label>Vehicle You can run</label>
                                <select class="form-control" name="vehicletype" required>
                                  <option value="none">None</option>
                                  <option value="both">Both</option>
                                  <option value="four">4 Wheeler</option>
                                  <option value="two">2 Wheeler</option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="feDescription">Personal Details</label>
                                <pre><textarea class="form-control" id="details" name="personaldetails" rows="5" placeholder="Achievement, your extra knowlwdge ect. ***" required></textarea></pre>
                                <span id="details_error"></span>
                              </div>
                            </div>
                            <div class="form-row">
                              <button type="submit" class=" form-control btn btn-accent">Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
<?php          }?>

<script>
                    $(document).ready(function(){
                    $('#citzen').on('keyup', function(){
                    if($('#citzen').val().length < 3){
                    $('#citzen_error').html('***At least 4 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#citzen_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#location').on('keyup', function(){
                    if($('#location').val().length < 3){
                    $('#location_error').html('***At least 3 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#location_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#programs').on('keyup', function(){
                    if($('#programs').val().length < 9){
                    $('#programs_error').html('***At least 9 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#programs_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#exp').on('keyup', function(){
                    if($('#exp').val().length < 6){
                    $('#exp_error').html('***At least 6 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#exp_error').html('');
                    }
                    });
                    });

                    $(document).ready(function(){
                    $('#details').on('keyup', function(){
                    if($('#details').val().length < 10){
                    $('#details_error').html('***At least 10 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#details_error').html('');
                    }
                    });
                    });
</script>