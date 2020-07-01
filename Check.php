 <?php
    
    session_start();
    if(!isset($_SESSION['ST_NAME'])){
        header('location:login.php');
    }
    
    ?>

