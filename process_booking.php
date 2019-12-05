<?php
    session_start();
    extract($_POST);
    include('config.php');
    $_SESSION['screen']=$screen;
    $_SESSION['seats']=$seats;
    $_SESSION['amount']=$amount;
    $_SESSION['date']=$date;
?>
<script>
    setTimeout(function(){ window.location="complete.php"; }, 500);
</script>