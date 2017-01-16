<?php 


         if(isset($_POST['add'])) {
            
    
            include "../../database/dbconnect.php";
            
           
                $file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
	move_uploaded_file($_FILES["image"]["tmp_name"],"../../assets/images/ar_img/" . $_FILES["image"]["name"]);//change file path
	$image=$_FILES["image"]["name"];
                
                
               $title = $_POST['title'];
               $content = $_POST['content'];
               //$img1 = $_POST['img1'];
               $link = $_POST['link'];
               //$image = $_POST['image'];
               $name = addslashes ($_POST['name']);
               $status = addslashes ($_POST['status']);
           // }
            
              $myfile = fopen("$link", "w");
              //fwrite($myfile, $title); 
              //echo "<br>";
              $content= strip_tags($content);
              fwrite($myfile, $title);
              fwrite($myfile, $content);
              
              
              
//echo $image;
            $_SESSION['cntnt'] = $content;
            $_SESSION['ttl'] = $title;
            $sql = "INSERT INTO articles(title,content,link,image,name,status) VALUES('$title','$content','$link','$image','$name','$status')";
               
            mysqli_select_db($con,'project');
            $retval = mysqli_query( $con, $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($con));
            }
             
             $f=mysqli_query($con,"SELECT article_no FROM articles ORDER BY article_no DESC LIMIT 1");
             $row = mysqli_fetch_assoc($f);
             $id=$row['article_no'];
           //$a =array();
             $sql = mysqli_query($con,"SELECT image FROM articles WHERE article_no=$id");
         
             $r = mysqli_fetch_assoc($sql);
             $id1=$r['image'];
            
            
            echo  '<img src="../../assets/images/ar_img/'.$id1.'"  style = "float: right ;margin: 0px 0px 15px 20px; max-height: 20em ; min-height:14em; width: 30%; height:auto;">';
            echo "<h3>"."$title"."</h3>"."<br>"; 
            
             echo file_get_contents("$link").'<br>';
            echo "<a href='pdf.php'>"."create pdf"."</a>";
            fclose($myfile);
            
            mysqli_close($con);


    

 }else{}
 ?>



    