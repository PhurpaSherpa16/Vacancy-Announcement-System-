<div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-2 bg-white" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="<?php echo base_url();?>" class="text-black h2 mb-0">JobFinder.com</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="<?php echo base_url();?>Navigation"><span>Home</span></a></li>
                <li><a href="<?php echo base_url();?>Navigation/about"><span>About</span></a></li>
                <li><a href="<?php echo base_url();?>Navigation/contact"><span>Contact</span></a></li>
                <li><a data-toggle="modal" data-target="#register"><span>Register</span></a></li>
                <li><a data-toggle="modal" data-target="#login"><span>Login</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>
          </div>
        </div>
    </header>
</div>
   <?php include 'login.php' ?>
   <?php include 'register.php' ?>
