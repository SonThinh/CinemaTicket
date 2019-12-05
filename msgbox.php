<?php

if(isset($_SESSION['success'])) {?>
    <div class="alert alert-success alert-dismissible" id='hideMe'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Thành công!</h4>
        <?php echo $_SESSION['success'];?>
    </div>
<?php 

    unset($_SESSION['success']);
}
if(isset($_SESSION['error']))   {?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Vui lòng nhập lại!</h4>
        <?php echo $_SESSION['error'];?>
    </div>
<?php
    unset($_SESSION['error']);
}
?>




