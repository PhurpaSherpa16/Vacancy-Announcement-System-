<?php 
if (isset($_SESSION['message'])) {
    ?>
    <button type="button" id="message" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" style="display: none">
    </button>
    <script>
        $(document).ready(function(){
            $("#message").click();
        });
    </script>
    <div class="modal fade bs-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="margin-top: 100px;">
            <div class="modal-dialog modal-sm"> 
                <div class="modal-content"> 
                    <div class="modal-header">  
                        <h4 class="modal-title" id="mySmallModalLabel" style="color: black;">Information</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button> 
                    </div> 
                    <div class="modal-body"> <?php echo  $_SESSION['message']; ?></div>
                </div> 
            </div> 
    </div>
    <?php
}
?>

