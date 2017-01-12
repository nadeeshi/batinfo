<!DOCTYPE html>
<html lang="en">
<head>
  <title>nav1</title>
  <link href="css/bootstrap.css" rel="stylesheet">
 <link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
  <link href="css/footer.css" rel="stylesheet">
  <script src="js/jquary.js"></script>
  <script src="js/bootstrapjs.js"></script>

   
    
</head>


<body>

    <div>
        <?php include '../../Assets/IncludedFiles/navbarTemplate.php'; ?>
    </div>

    <div class="container-fluid" style="padding-top:120px;">
    <div class="col-sm-8 col-sm-push-4 col-xs-12">
	   <h2> Your Profile</h2>
       <br>
       <?php
        include_once '../../database/dbconnect.php';
        $id= $_GET['id'];
        $sql = "select * from researchers where id= $id";
        $res = $con->query($sql);

        while ($row = $res->fetch_assoc()) {
            ?>
         <div id = "info">
         <form method="POST" action="update.php">
            <table border="0" class="table table-hover">
                <tr>
                    <td>Profile ID</td>
                    <td><input type="text" name="profileid" value="<?php echo $row['id'];?>" disabled=""></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" value="<?php echo $row['fname'];?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" value="<?php echo $row['lname'];?>"></td>
                </tr>
                <tr>
                    <td>NIC Number</td>
                    <td><input type="text" name="profileid" value="<?php echo $row['nic'];?>" disabled=""></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="profileid" value="<?php echo $row['gender'];?>" disabled=""></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="profileid" value="<?php echo $row['country'];?>" disabled=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="submit" name="submit" value="Update Profile"></td>
                </tr>
            </table>
          </form>
       </div>       
        <?php    
        }
       ?>
       
	  </div> 
    <div class="push"></push>
	</div>

</body>
</html>