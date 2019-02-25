
<?php

include_once("conexion.php");
// header('Content-Type: application/json');

        $getFirmas = "SELECT  f.id,f.asociado_id,f.estado,a.nombre,a.cif FROM `firma` as f inner join  asociado as a on f.asociado_id=a.id where f.estado = 1";
        $query = mysqli_query($mysqli,$getFirmas);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
<div>

   <div style="margin: 10px 0 0 10px;">
        <img src="micoope1.png" style="width: 25%;height: 75px;">        
    </div>
    <div style="position:absolute; top:20px; left:300px;">
        <h1>ASAMBLEA 2019</h1>
    </div>
    <div style="position:absolute; top:20px; left:700px;">
        <h1><?=$_GET['count']?></h1>
    </div>
     
     <table class="table">
        <tr >
            <td style="width:50px">#</td>
            <td style="width:300px;text-align:center"><b>NOMBRES</b></td>
            <td style="width:100px"><b>CIF</b></td>
            <th style="text-align:center"><b>FIRMAS</b></th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php  
            while($row = mysqli_fetch_assoc($query)){        
        ?>
        <tr >
            <td style="width:50px;font-size:8px"><b><?=$row['id']?></b></td>
            <td style="width:300px;font-size:8px"><b><?=$row['nombre']?></b></td>
            <td style="width:100px;font-size:8px"><?=$row['cif']?></td>
            <th>______________________________</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php  

                $update = "update firma set estado = 2 where id = ".$row['id'];
                mysqli_query($mysqli,$update);

            }      
        ?>
     </table>
</div>
