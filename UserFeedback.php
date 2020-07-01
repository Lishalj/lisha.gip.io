<?php
include("adminh.php");
include("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link href="Css/Kfms_style.css" rel="stylesheet" type="text/css"/>
    <body>
      <hr>
      <hr>
        <div>
            
            <table border="2px" id="customers">
              <thead>
                <tr>
                 <th> S.NO</th>
                    <th>Name</th>
                    <th>Experince</th>
                    <th>Email</th>
                    <th>Message</th>
                   </tr>
              </thead>
              <tbody>
                <tr>                  
                <?php 
                $i=1;
                $sel_regis = mysqli_query($conn,"select * from feedback");
                while($row = mysqli_fetch_array($sel_regis))
                {
                ?>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['exper']; ?></td>                  
                <td><?php echo $row['email']; ?></td>   
                <td><?php echo $row['mess']; ?></td> 
             </tr>
            <?php } ?>
               
            </table>
        </div>
    </body>
    
</html>
