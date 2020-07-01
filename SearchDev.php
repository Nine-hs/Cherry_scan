<!doctype html>

<?php

session_start();

if(isset($_SESSION['ST_NAME'])){
    header('location:cherry_staff.php');
}

?>


<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="script/style.css">
    <title>Blog</title>
    <link rel="icon" href="img/film-64.ico" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <br>
    <header>
       
                    <div class="logo">  </div>
                    
                        <nav>
                            
                        <ul>
                                <li>
                                    <a href="#"><span class="glyphicon glyphicon-home"> หน้าแรก</span></a>
                                    <li>
                                        <a class="activitive" href="#"><span class="glyphicon glyphicon-tag"> บริการ</span></a>
                                            <ul>
                                                <li><a href="dev.php"><span class="glyphicon glyphicon-picture"> ล้างฟิล์ม</span></a></li>
                                                <li><a href="searchdev.php"><span class="glyphicon glyphicon-search"> ค้นหา</span></a></li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-map-marker"> ติดต่อ</span></a>
                                            <ul>
                                                <li><a href="#"><span class="glyphicon glyphicon-phone-alt"> เกี่ยวกับเรา</span></a></li>     
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="login.php" class="signup"><span class="glyphicon glyphicon-user"> ลงชื่อเข้าใช้</span></a>                                      
                                    </li>
                                </ul>
                            </nav>

                            
                            <div class="iconpage"><a href="index.php"><img src="img/Untitled-1.gif" class="imgpage" ></a></div>              
                                    
                    </header>




    <center>

        <div><img src="img/Search.gif" alt="" class="picdev"><br><br>

            <div class=" w-25">ค้นหารายการ</div>
        </div>
        <input type="text" class="form-control w-25" id="search" placeholder="ค้นหา">
        </div>
        </div>

        </div>

        <br><br>
        <div id="shaba"></div>
    </center>



</body>

<script>
    $(document).ready(function() {


        $("#search").keyup(function() {

            var txt = $(this).val();

            if (txt != '') {

                $.ajax({
                    method: "post",
                    url: "sr.php",
                    data: {
                        search: txt
                    },
                    success: function(data) {
                        $('#shaba').html(data);

                    }
                });
            } else {
                $("#shaba").html('');
            }
        });
    });
</script>

</html>