<?php if (isset($orgdata)){
?>
<div class="container" role="alert">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add More details of company</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Company Details</h6>
                      <span><a href="<?php echo base_url();?>Organization/logoupdate">Update Logo</a>, change your logo to make more generic</span>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>OrganizationRole/organizationUpdate">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name ***" name="companyname" value="<?php echo $orgdata->companyname;?>"> 
                                <input type="text" value="<?php echo $userdata->uid; ?>" name="uid" hidden>
                                <input type="text" value="<?php echo $orgdata->oid; ?>" name="oid" hidden>
                              </div>
                              <div class="form-group col-md-6">
                                <label>Company Website Link</label>
                                <input type="text" class="form-control" placeholder="www.example.com ***" value="<?php echo $orgdata->companylink;?>" name="companylink"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="fePassword">Company Type</label>
                                <input type="text" class="form-control" placeholder="Input Company Type ***" name="companytype" value="<?php echo $orgdata->companytype;?>"> 
                              </div>
                              <div class="form-group col-md-4">
                                <label for="number">Company Phone</label>
                                <input type="number" class="form-control" placeholder="Company Primary Number **" name="primarynumber" value="<?php echo $orgdata->primarynumber;?>"> 
                              </div>
                              <div class="form-group col-md-4">
                                <label for="fePassword">Company Phone</label>
                                <input type="number" class="form-control" placeholder="Company Seconday Number ***" name="secondarynumber" value="<?php echo $orgdata->secondarynumber;?>"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Company Email</label>
                                <input type="email" class="form-control" placeholder="Company Primary Email **" name="primaryemail" value="<?php echo $orgdata->primaryemail;?>"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label>Company Email</label>
                                <input type="email" class="form-control" placeholder="Company Seconday Email ***" name="secondaryemail" value="<?php echo $orgdata->secondaryemail;?>"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feInputCity">City</label>
                                <input type="text" class="form-control" id="feInputCity" placeholder="City like Kathmandu, Pokhara ..." name="city" value="<?php echo $orgdata->city;?>"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputZip">District</label>
                                <input type="text" class="form-control" id="inputZip" placeholder="District where organization located" name="district" value="<?php echo $orgdata->district;?>"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feDescription">Company Moto</label>
                                <textarea class="form-control" name="moto" rows="5" placeholder="Company Moto ***"><?php echo $orgdata->moto;?></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="Company details ***"><?php echo $orgdata->description;?></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

<?php  
} 
else{

  ?>

<div class="container" role="alert">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Add More details of company</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Company Details</h6>
                      <span><a href="<?php echo base_url();?>Organization/logoupdate">Update Logo</a>, change your logo to make more generic</span>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="<?php echo base_url();?>OrganizationRole/organizationUpdate">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name ***" name="companyname"> 
                                <input type="text" value="<?php echo $userdata->uid; ?>" name="uid" hidden>
                              </div>
                              <div class="form-group col-md-6">
                                <label>Company Website Link</label>
                                <input type="text" class="form-control" placeholder="www.example.com ***" name="companylink"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="fePassword">Company Type</label>
                                <input type="text" class="form-control" placeholder="Input Company Type ***" name="companytype"> 
                              </div>
                              <div class="form-group col-md-4">
                                <label for="number">Company Phone</label>
                                <input type="number" class="form-control" placeholder="Company Primary Number **" name="primarynumber"> 
                              </div>s
                              <div class="form-group col-md-4">
                                <label for="fePassword">Company Phone</label>
                                <input type="number" class="form-control" placeholder="Company Seconday Number ***" name="secondarynumber"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Company Email</label>
                                <input type="email" class="form-control" placeholder="Company Primary Email **" name="primaryemail"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label>Company Email</label>
                                <input type="email" class="form-control" placeholder="Company Seconday Email ***" name="secondaryemail"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feInputCity">City</label>
                                <input type="text" class="form-control" id="feInputCity" placeholder="City like Kathmandu, Pokhara ..." name="city"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputZip">District</label>
                                <input type="text" class="form-control" id="inputZip" placeholder="District where organization located" name="district"> 
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feDescription">Company Moto</label>
                                <textarea class="form-control" name="moto" rows="5" placeholder="Company Moto ***"></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="Company details ***"></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>


  <?php
}
?>
