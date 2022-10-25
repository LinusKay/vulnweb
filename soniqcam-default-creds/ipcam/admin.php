<?php
session_start();
error_reporting(0);
if(isset($_SESSION['loggedin'])){ ?>

    <?php include('header.php'); ?>
        aaa
    <?php include('footer.php'); ?>

<?php }
else{
    header('location: login.php');
}
?>