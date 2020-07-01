<!DOCTYPE html>
<html>
<?php
    
    
    
    ?>
<head>
       
	<meta charset="utf-8">
	<link rel="stylesheet" href="script/style.css">
	<title>Form Register</title>
        <link rel="Stylesheet" type="text/css" href="script/styledev.css">
        <link rel="icon" href="img/film-64.ico"/> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="jquery.datetimepicker.full.min">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

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
                    
                    <style>
.mySlides {display:none;}
</style>
<form name="devpag" method="POST" action="insert 3.php">
    <table border="0" width="700px" align="center" class="tbl">
    <tr>
            <th>
                
            </th>
        </tr> 
        <tr>
            <th>
                <h2 class="hh1" align="center">ลงทะเบียนล้างฟิล์ม</h2>
            </th>
        </tr>                                   
        <tr>
                
        </tr>
		<tr>
			<td>
                <input type="text" class="tdl" name="sername" placeholder="Name" value="" required class="form-control">
            </td>
            <tr>
			<td>
                <input type="text" class="tdl" name="phone" placeholder="Phone" value="" required class="form-control">
            </td>
        </tr>
            </td>
        </tr>
        <tr>
			<td>
                <select name="Brand" id="Brand" class="tdl" required class="form-control"> 
                    <option value="">เลือกยี่ห้อ</option>
                </select>
			
            </td>
        </tr>
        <tr>
			<td>    
                <select name="gener" id="gener" class="tdl" required class="form-control">
                    <option value="">เลือกรุ่น</option>
                </select>
            </td>
		</tr>
		<tr>
			<td>  
                <select name="qty" id="qty" class="tdl" required class="form-control">
                    <option value="">จำนวน</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>                        
		</tr>
		<tr>  
            <td>
			    <?php date_default_timezone_set("Asia/Bangkok"); ?>
                <input type="date" value="<?php     echo date('Y-m-d'); ?>"
                class="tdl" name="firstdate" >
            </td>
		</tr>
		<tr>
            <td>
            <input type="date" value="" class="tdl" 
            name="enddate" required class="form-control"> 
            </td>
		</tr>
		<tr>
			<td>
                <input type="radio" name="come" value="st" checked="true" id="come" 
                onclick="javaScript:if(this.checked){document.all.textad.style.display='none';}" > มาที่หน้าร้าน
			</td>
		</tr>
                <tr>
			<td>
    
                <input type="radio" name="come" value="ems to:" id="come1" 
                onclick="javaScript:if(this.checked){document.all.textad.style.display='';}" > ส่งทาง Ems
			</td>
		</tr>
        <tr>
			<td>
                <input type="text" class="tdl" name="address" value="" 
                id="textad" placeholder="Address" required class="form-control">
            </td>
		</tr>
		        <script>
                    $("#textad").hide();
                </script>
        <tr>
			<td align="center" >
            <input type="submit" name="sub" value="Save" >
            </td>
        </tr>
        <tr>  
            <td>
			    <h1></h1>
            </td>
        </tr>
        <tr>  
            <td>
            <h1></h1>
            </td>
		</tr>
	</table>
</form>
 
	
    <footer>
        
    </footer>
</body>

<script>
$(document).ready(function(){

 load_json_data('Brand');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  
  $.getJSON('brand.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   
   $.each(data, function(key, value){
    if(id == 'Brand')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.name+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#Brand', function(){
  var gen_id = $(this).val();
  if(gen_id != '')
  {
   load_json_data('gener', gen_id);
  }
  else
  {
   $('#gener').html('<option value="">Select Generation</option>');
   
  }
 });
 
});
</script>

</html>