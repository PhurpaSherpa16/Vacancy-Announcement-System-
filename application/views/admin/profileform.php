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
                      <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/admin.png?>" alt="User Avatar" style="height: 150px; width: 200px;">
                    </div>
                    <h4 class="mb-0"><?php echo $userdata->firstname. ' '. $userdata->lastname;?></h4>
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
                                <input type="text" class="form-control" id="feFirstName" name="firstname" placeholder="First Name ***" value="<?php echo $userdata->firstname;?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" class="form-control" id="feLastName" name="lastname" placeholder="Last Name ***" value="<?php echo $userdata->lastname;?>"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="number">Phone</label>
                                <input type="number" class="form-control" name="number" id="feEmailAddress" placeholder="Number **" value="<?php echo $userdata->number;?>"> 
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email ***" value="<?php echo $userdata->email;?>"> 
                              </div>
                              </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="Define in short about your experience and work area or fresher."><?php echo $userdata->description;?></textarea>
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