<div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url();?>assets/custom/assets/images/hero_1.jpg); background-position: fixed; background-attachment: cover;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Find Jobs in <span class="typed-words"></span></h1>
                <p>Explore top-rated jobs, intern and more!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>  
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Recently Posted Jobs</h2>
            <p class="color-black-opacity-5">Jobfinder online portal for jobs seeker</p>
          </div>
        </div>
        <div class="row">
              <?php
                foreach ($job as $value) {
                  ?>
                  <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                  <div class="listing-item">
                    <div class="listing-image"  style="height: 200px;">
                      <img src="<?php echo base_url();?>assets/images/<?php echo $value->image;?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-item-content">
                      <a href="<?php echo base_url();?>Navigation/getJobDetails?viewjob_id=<?php echo $value->jobid;?>">
                      <h2><?php echo $value->companyname;?></h2>
                      <h2 class="mb-1"><?php echo $value->jobtitle;?></h2>
                      <span class="address"><?php echo $value->district. ', '. $value->city;?></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php
                }
              ?>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Frequently Ask Question</h2>
            <p class="color-black-opacity-5">JobFiner a online protal for seeking jobs</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">Is it free to apply from here?</a>
              <div class="collapse" id="collapse-1">
                <div class="pt-2">
                  <p class="mb-0">Jobfinder is a online portal which act as the brdge between Company and jobs seekers, so its toatally free.</p>
                </div>
              </div>
            </div>
            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Is this available in all over country or outside of it?</a>
              <div class="collapse" id="collapse-4">
                <div class="pt-2">
                  <p class="mb-0">Recently it's limited for captial city and around it's places, after some period of time it will availabe all over country.</p>
                </div>
              </div>
            </div>
            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">How to apply?</a>
              <div class="collapse" id="collapse-2">
                <div class="pt-2">
                  <p class="mb-0">Upload your CV or apply for the company by sending email from this media.</p>
                </div>
              </div>
            </div>
            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How do we generate reveneu?</a>
              <div class="collapse" id="collapse-3">
                <div class="pt-2">
                  <p class="mb-0">Through advertisement that will post in our website.</p>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-2 text-white">Let's get started. Create your account</h2>
            <p class="mb-4 lead text-white-opacity-05">Online base platform which help to find job in a single click.</p>
            <p class="mb-0"><a href="#" class="btn btn-outline-white text-white btn-md font-weight-bold" data-toggle="modal" data-target="#register">Register Free</a></p>
          </div>
        </div>
      </div>
    </div>
      <script>
            var typed = new Typed('.typed-words', {
            strings: ["IT Compnay."," Bank."," Hotels.", " School."],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
      </script>