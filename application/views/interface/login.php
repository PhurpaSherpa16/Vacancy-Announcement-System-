<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <form method="post" action="<?php echo base_url();?>Auth/loginCheck">
              <div class="modal-body">
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
                            <div class="form-group col-md-9">
                                <input id="email" type="email" class="form-control" name="email" required autofocus placeholder="Email ***">
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top: 10px;">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                            <div class="form-group col-md-9">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password ***">
                            </div>
                        </div>
                </div>
                <div class="modal-footer"> 
                    <div class="form-group col-md-12">
                        <button type="submit" class="form-control btn btn-primary">
                            Login
                        </button>
                            <a class="btn btn-link" href="<?php echo base_url();?>Navigation/passwordRest" style="text-align: center;">
                                Forgot Your Password?
                            </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
