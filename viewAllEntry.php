<?php
include("adminh.php");
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>adminpannel</title>
	 <link href="Css/Kfms_style.css" rel="stylesheet" type="text/css"/>
</head>

	<body>
  
		 <div>
     <hr>
  <hr>
            
            <table border="1px" id="customers">
              <thead>
               <tr>
                   <th> S.NO</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Gender</th>
                    <th>Campus</th>
                    <th>Purpose</th>
                    <th>Date&Time</th>
                    <th>Address</th>  
                </tr>
              </thead>
              <tbody>
                <tr>                
                <?php 
                $i=1;
                $sel_regis = mysqli_query($conn,"select * from registration");
                while($row = mysqli_fetch_array($sel_regis))
                {
                ?>
                <td><?php echo $i++; ?></td> 
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>                  
                <td><?php echo $row['email']; ?></td>   
                <td><?php echo $row['mno']; ?></td> 
                <td><?php echo $row['gender']; ?></td>   
                <td><?php echo $row['visit']; ?></td>   
                <td><?php echo $row['purpose']; ?></td>    
                <td><?php echo $row['edate']; ?></td>
                <td><?php echo $row['addr']; ?></td>                
                </tr>
            <?php } ?>
              </tbody>
</table>
</body>
</html>      