<!doctype html>
<html>
    
    <?php
    
    session_start();
    $user=$_SESSION['ST_NAME'];
    include ('check.php');
    
    ?>
    <head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script/style.css">
    <link rel="stylesheet" href="script/stylestaff.css">
    <script src="script/myScript.js"></script>
    <title>Blog</title>
    <link rel="icon" href="img/film-64.ico"/>  
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <?php
        include('connect.php');

        
       
    ?>
        <body>
        <br>
        <header>
                    <div class="logo">  </div>
                        <nav>
                        <ul>
                                <li>
                                    <a href="#"><span class="glyphicon glyphicon-home"> หน้าแรก</span></a>
                                        </li>
                                    <li>
                                        <a class="activitive" href="#"><span class="glyphicon glyphicon-bell"><span class="badge badge-light"></span> เช็ครายการล้าง</span></a>
                                            <ul>
                                                <li><a href="#"><span class="glyphicon glyphicon-picture"> ออเดอร์ล้างฟิล์ม</span></a></li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="signup"><span class="glyphicon glyphicon-bookmark"> <?php echo"พนักงาน: ". $user ?></span></a>
                                        <ul>
                                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"> ออกระบบ</span></a></li>     
                                            </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="iconpage"><a href="index.php"><img src="img/Untitled-1.gif" class="imgpage" ></a></div>   
                                    
                    </header>
                           

                    <?php 
                    
                    
                    ?>

                    <table class="tbad"  width="1400">
                        <tr><td class="titletb" colspan="9" align="center"><div class="iconpage"><img src="img/Untitled-1.gif" class="imgpage" ><h1>รายการล้างฟิล์มวันนี้</h1></div></td><td></td></tr>
                        <tr>
                            <td class="ti">ID</td>
                            <td class="ti">NAME</td>
                            <td class="ti">BRAND</td>
                            <td class="ti">GENERATION</td>
                            <td class="ti">FIRST DATE</td>
                            <td class="ti">END DATE</td>
                            <td class="ti">QUALITY</td>
                            <td class="ti">TO</td>
                            <td class="ti">STATUS</td>
                        </tr>
                        <?php
                            
                            $sqli="SELECT * FROM cherry_service ORDER BY Dev_id DESC";
                            $results_per_page = 8;
                            $result=mysqli_query($_con, $sqli);
                            $number_of_results = mysqli_num_rows($result);
                            $number_of_pages = ceil($number_of_results/$results_per_page);
                            if (!isset($_GET['page'])) {
                                $page = 1;
                                } else {
                                $page = $_GET['page'];
                                }
                            $this_page_first_result = ($page-1)*$results_per_page;
                            $sqli='SELECT * FROM cherry_service LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
                            
                            $result=mysqli_query($_con, $sqli);
                            $FN=1;
                           
                            while($data=mysqli_fetch_array($result)){
                        ?>

                        <tr>
                            <td class="rows"><?php echo $data['Dev_id']; ?></td>
                            <td class="rows"><?php echo $data['Dev_n_ln']; ?></td>
                            <td class="rows"><?php echo $data['B_film']; ?></td>
                            <td class="rows"><?php echo $data['G_film']; ?></td>
                            <td class="rows"><?php echo $data['F_date']; ?></td>
                            <td class="rows"><?php echo $data['E_date']; ?></td>
                            <td class="rows"><?php echo $data['qty']; ?></td>
                            <td class="rows" ><?php echo $data['Shiping']; ?></td>
                            <td class="rows">
                            <a href="cherry_staff.php?delete=<?php echo $data['Dev_id'];?>"  class="btn btn-danger"  role="button">Delete</a>
                            <a href="cherry_staff.php?finish=<?php echo $FN ; ?>>"  class="btn btn-info"  role="button">Finish</a>


                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                        <tr>
                        <td colspan="9" class="fi"><nav aria-label="...">
                                    <ul class="pagination pagination-sm">
                                    <li class="page-item disabled">
                                    <?php for ($page=1;$page<=$number_of_pages;$page++) {
                                    echo '<li class="page-item"><a href="cherry_staff.php?page=' . $page . '" class="page-link">' . $page . '</a></li> ';
                                    }?>                                  
                                    </ul>
                                </nav></td>
                        <td></td>
                        </tr>
                        <tr>
                        <td class="foote" colspan="9"></td>
                        </tr>
                        <tr>
                            <td class="footer" colspan="9" align="center"><h1>&nbsp;</h1></td>
                            <td></td>
                        </tr>
                    </table>
                  
                   

                    <?php
                        if(isset($_GET['delete'])){
                            $delete_id=$_GET['delete'];
                            mysqli_query($_con,"DELETE FROM cherry_service WHERE Dev_id='$delete_id'");
                        }
                        else if(isset($_GET['finish'])){
                            $i=1;
                            mysqli_query($_con,"UPDATE cherry_service
                            SET st_id='$i' WHERE Dev_id");
                        }

                    ?>
                       
        </body>

</html>
