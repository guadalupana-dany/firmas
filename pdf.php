
<?php
/**
 * Desarrollado por Dany Diaz
 * Desarrollador Web
 */
//INCLUIR LA CLASE CONEXION
include_once("conexion.php");
// header('Content-Type: application/json');

//OBTENEMOS LAS FIRMAS A IMPRIMIR QUE SON 16
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
           $contador = 0;
            while($row = mysqli_fetch_assoc($query)){   
           $contador ++;     
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

              //CUANDO CADA FIRMA RECORRA EL CICLO VA CAMBIANDO DE ESTADO
                $update = "update firma set estado = 2 where id = ".$row['id'];
                mysqli_query($mysqli,$update);

            } 
            
       if($contador < 16 ){    
         
          for($i = 0; $i < $contador;$i++){          
      ?>
       <tr >
            <td style="width:50px;font-size:8px"><b>*******************************</b></td>
            <td style="width:300px;font-size:8px"><b>******************************</b></td>
            <td style="width:100px;font-size:8px"><b>******************************</b></td>
            <th><b>******************************</b></th>
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
          }
       }
      ?>
     </table>
</div>
