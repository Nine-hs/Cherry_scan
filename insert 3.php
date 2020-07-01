<script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>  

<?php

   
   include('connect.php');
    

   if(isset($_POST['sub'])){
        $_name=$_POST['sername'];
        $_phone=$_POST['phone'];
        $Brd_film=$_POST['Brand'];
        $_gen=$_POST['gener'];
        $_qty=$_POST['qty'];
        $ft_date=$_POST['firstdate'];
        $get_date=$_POST['enddate'];
        $Ship_=$_POST['come']; 
        $_address = $_POST['address'];
        
 


    if($Brd_film == "1"){
        $brandfilm = "Fujifilm";
    } 
    if($Brd_film == "2"){
        $brandfilm = "Kodak";
    }   
    if($Brd_film == "3"){
        $brandfilm = "Agfa";
    }   
    if($Brd_film == "4"){
        $brandfilm = "Solution";
    }   
    if($Brd_film == "5"){
        $brandfilm = "eFinity";
    }    
    else if($Brd_film == "6"){
        $brandfilm = "Tudor";
    }


    if($Ship_=="st"){

        $_address ="";

        $_id=$_POST['dev_id'];

        $Get_f="Store";

    }
    else if($Ship_ == "ems to:"){
        $Get_f=$Ship_.$_address;
    }

    
    
    
        
        $strSQL= "INSERT INTO cherry_service(Dev_n_ln,Dev_phone,B_film,G_film,qty,F_date,E_date,Shiping)Values".
        "('".$_name."','".$_phone."','".$brandfilm."','". $_gen."','".$_qty."','".$ft_date."','".$get_date."','".$Get_f."')";  

        $query=mysqli_query($_con,$strSQL);


   
        if($query){
           
            echo"<script>";
			echo "swal('Success!','Thank you, :".$_name."','Sir').then((value)=>{window.location.replace(\"index.php\");});";
            echo"</script>";
            header( "location: SearchDev.php" );
            
        }
        else {

            echo"<script>";
            echo "swal('Register Failed !','Please Try Again')";
            echo"</script>";
            header( "location: Dev.php" );
        }
        }
        mysqli_close($_con);

       



?>