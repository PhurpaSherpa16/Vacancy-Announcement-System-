<style>
    .form-group{
        margin: 0px;
        padding: 0px;
    }
    .form-control{
        margin: 0px;
    }
    .form-group label{
        font-size: 12px;
    }
    .form-group input[type="text"], .form-group input[type="password"], .form-group input[type="email"], .form-group input[type="number"], .form-group select, .form-group select option{
        font-size: 12px;
        height: 30px;
    }
</style>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                    <form role="form" method="post" action="<?php echo base_url();?>Auth/userRegister">
                        <div class="modal-body">
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <label>First Name/ Organization Name</label>
                                            <input id="firstname" type="text" class="form-control" name="firstname" placeholder="Firstname or organization name *** " required autofocus autocomplete="off">
                                            <span id="f_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class=" form-group col-md-12">
                                            <label>Last Name</label>
                                            <input id="lastname" type="text" class="form-control" name="lastname" placeholder="If your are organization no need last name *** " autofocus autocomplete="off">
                                            <span id="l_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                        <label for="email">E-Mail Address</label>
                                            <input id="email" type="email" class="form-control" name="email" required placeholder="Personal or organization email ***" autocomplete="off">
                                            <i class="material-icons" style="font-size: 10px;">priority_high</i><span style="font-size: 10px; line-height: 5px;"> One email used to register once</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                        <label for="email">Who You are??</label>
                                            <select class="form-control" name="usertype">
                                              <option value="normal">Job seeker</option>
                                              <option value="organization">Organization</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                        <label for="password">Password</label>
                                            <input type="password" id="regpassword" class="form-control" name="password" required placeholder="Password ***" autofocus>
                                            <span id="p_error"></span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="modal-footer">    
                                    <div class="col-md-6">
                                    <button type="submit" id="submit" class="form-control btn btn-primary">Register</button>
                                    </div>
                                    <div class="col-md-6">
                                    <button type="button" class="form-control btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                    </form>
            </div>
        </div>
    </div>

                <script>
                    $(document).ready(function(){
                    $('#firstname').on('keyup', function(){
                    if($('#firstname').val().length < 3){
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
                    $('#lastname').on('keyup', function(){
                    if($('#lastname').val().length < 3){
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
                    $('#regpassword').on('keyup', function(){
                    if($('#regpassword').val().length < 6){
                    $('#p_error').html('***At least 6 character require').css('color', 'red');
                    $(':input[type="submit"]').prop('disabled', true);
                        return;
                    }
                    else{
                        $(':input[type="submit"]').prop('disabled', false);
                        $('#p_error').html('');
                    }
                    });
                    });
                </script>