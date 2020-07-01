<link rel="Stylesheet" type="text/css" href="script/stylesearch.css">
<?php
       
    include('connect.php');

     $search=$_POST['search'];
      
    $sql="SELECT Dev_id,Dev_n_ln,B_film,G_film,qty,F_date,E_date,Shiping,statuss FROM cherry_service inner join status_tb On cherry_service.st_id=status_tb.sta_id WHERE Dev_n_ln LIKE '%".$search."%'";
     $result=$_con->query($sql);
     $count=$result->num_rows;
    
     $output="";

    if($count>0){

        $output.="<table class='tg'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Generation</th>
            <th>Quatity</th>
            <th>Firt date</th>
            <th>End date</th>
            <th>Shiping</th>
            <th>Status</th>
        </tr>";
        
       while($data=mysqli_fetch_array($result)){
         if($data["statuss"]=="ยังไม่เสร็จ"){
            $status = '<FONT COLOR="red">'.$data["statuss"].'</FONT>';
         }else{
            $status = '<FONT COLOR="green">'.$data["statuss"].'</FONT>';
          }
       $output.="<tr>
       <td>".$data["Dev_id"]."</td>
       <td>".$data["Dev_n_ln"]."</td>
       <td>".$data["B_film"]."</td>
       <td>".$data["G_film"]."</td>
       <td>".$data["qty"]."</td>
       <td>".$data["F_date"]."</td>
       <td>".$data["E_date"]."</td>
       <td>".$data["Shiping"]."</td>
       <td>".$status."</td>
       </tr>";
       }
        
        echo $output.="</table>"; 
      }
    else{
        echo "Not found";
    }
  
      
    
      
?>
