<!doctype html>

<html>
<?php

session_start();

if(isset($_SESSION['ST_NAME'])){
    header('location:cherry_staff.php');
}

?>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script/style.css">
    <script src="script/myScript.js"></script>
    <title>Blog</title>
    <link rel="icon" href="img/film-64.ico"/>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
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
                    
                            <div id="slider">
                                <div id="box">
                                    <img src="img/img1.jpg" class="imgslideshow">
                                </div>
                                                    <!-- buttons for controls slider -->
                                    <button class="prew fa fa-chevron-left" onclick="prewImage()"></button>
                                    <button class="next fa fa-chevron-right" onclick="nextImage()"></button>
                            </div><br>
                            
                           
                        <div class="content">

                        </div>




                       
        </body>
            <script type="text/javascript">
                var slider_content = document.getElementById('box');
                var image = ['img1','img2', 'img3', 'img4','img5','img6','img7'];
                var i = image.length;
                    function nextImage(){
                        if (i<image.length) 
                        {
                            i= i+1;
                        }else{
                            i = 1;
                        }
                            slider_content.innerHTML = "<img src=img/"+image[i-1]+".jpg>";
                    }
                    function prewImage(){
                        if (i<image.length+1 && i>1) 
                        {
                            i= i-1;
                        }else{
                            i = image.length;
                        }
                            slider_content.innerHTML = "<img src=img/"+image[i-1]+".jpg>";
                    }
                    setInterval(nextImage , 3000);
        </script>





</html>