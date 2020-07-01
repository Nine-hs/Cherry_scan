<!DOCTYPE html>
<html lang="en" dir="ltr">
    
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="script/stylelogin.css">
  </head>
  <body>

      <form class="box" action="login.php" method="post">
  <h1>Login</h1>
  <input type="text" name="user" placeholder="Username" required class="form-control">
  <input type="password" name="pass" placeholder="Password" required class="form-control">
  <input type="submit" name="sub" value="Login">
</form>

    <?php
    
        include('connect.php');
        
        if(isset($_POST['user'])){
           $_user=  mysqli_real_escape_string($_con,$_POST['user']);
           
           $_pass=  mysqli_real_escape_string($_con,$_POST['pass']); 
           
           $_sql="SELECT * FROM cherry_st WHERE ST_USER=? AND ST_PASS=?";
           
           $stmt_= mysqli_prepare($_con, $_sql);
           
           mysqli_stmt_bind_param($stmt_,"ss", $_user, $_pass);
           
           mysqli_execute($stmt_);
           
           $_result=  mysqli_stmt_get_result($stmt_);
           
           session_start();
           
           $row_=  mysqli_fetch_array($_result,MYSQLI_ASSOC);
           
           if($row_['ST_USER'] != $_user){
               
               echo "<script>";
               echo "alert('Please Check Username');";
               echo "</script>";
               
           }
           else if($row_['ST_PASS'] != $_pass){
               echo "<script>";
               echo "alert('Please Check Password');";
               echo "</script>";
           }
            else {
           
           if($_result->num_rows == 1){
               echo "<script>";
               echo "alert('success');";
               echo "</script>";
              
               $_SESSION['ST_NAME']=$row_['ST_NAME'];
               header('location:cherry_staff.php');
           }
            else{
                echo "<script>";
               echo "alert('FAILED !');";
               echo "</script>";
               header('location:login.php');
                }
                }
        }
        
        
    
    
    ?>

  </body>
</html>