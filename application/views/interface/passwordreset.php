<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobFinder.com</title>
  	<?php include 'header.php'?>
</head>
<body>
   <?php include 'interfacenav.php'?>
   <div class="body" style="padding-top: 200px;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-4">
            <form method="post" action="<?php echo base_url();?>Navigation/resetPassword">
               <div class="form-group col-lg-12" style="margin-bottom: 10px;">
				<input id="email" type="email" class="form-control" name="email" required autofocus placeholder="Email ***">
               	</div>
                <div class="form-group col-lg-12">
                <button type="submit" class="form-control btn btn-success">
                    Reset Link
                </button>
                </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    <?php include 'footer.php'?>
</body>
</html>
<?php include 'message.php';?>