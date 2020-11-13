      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="<?php echo base_url();?>Organization" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?php echo base_url();?>assets/custom/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">JobFinder.com</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>Organization">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>Organization/postjob">
                  <i class="material-icons">work</i>
                  <span>Post Jobs</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>Organization/getAllJob">
                  <i class="material-icons">update</i>
                  <span>My Active Jobs</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>Organization/showeRequest">
                  <i class="material-icons">get_app</i>
                  <span>Activities</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>Organization/companyupdate">
                  <i class="material-icons">domain</i>
                  <span>Organization Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>Navigation/logout">
                  <i class="material-icons text-danger">&#xE879;</i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="<?php echo base_url();?>Organization/search" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex" method="post">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" name="search" type="text" placeholder="Search for something..." aria-label="Search"> 
                  <select class="form-control" name="jobarea" style="margin: 5px; margin-top: 10px;">
                    <option value="none" id="none">Job Area</option>
                    <option value="educational">Educational Sector</option>
                    <option value="hotel">Hotel</option>
                    <option value="it" >IT field</option>
                    <option value="bank">Bank</option>
                    <option value="marketing">Marketing</option>
                  </select>
                  <button class="btn btn-success" type="submit" style="height: 35px; margin: 5px; margin-top: 10px;">Search</button>
                </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
      
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php if (isset($orgdata)) {
                        ?>
                           <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/images/<?php echo $orgdata->image?>" alt="User Avatar" height="50px">
                        <?php
                    }
                    else{
                      ?>
                         <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url();?>assets/custom/images/avatars/org.png" alt="User Avatar">
                      <?php
                    }
                    ?>
                    <span class="d-none d-md-inline-block"><?php echo $userdata->firstname. ' '. $userdata->lastname ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="<?php echo base_url();?>Organization/showprofile">
                      <i class="material-icons">domain</i>Profile</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>Organization/postjob">
                      <i class="material-icons">work</i>Post Jobs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="<?php echo base_url();?>Navigation/logout">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>


