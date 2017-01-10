<!DOCTYPE html>
<html>
    <head>
        <title>thread</title>
        <link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../../assets/CSS/editnewschild.css">	
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/footer.css" rel="stylesheet">
        <script src="../../assets/JS/jquery.js"></script> 
        <script src="../../assets/JS/bootstrap.js"></script>

    </head>
    <body>
        <?php
		
		include ('../../database/cnm_db_con.php');
/*
        $mysql_hostname = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_database = "test2";
        $con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);*/
        //$qry = "SELECT * FROM news_insert WHERE news_id = '" . $_GET['id'] . "' ;";
        
		$qry = "SELECT * FROM news_before WHERE nid = '" . $_GET['id'] . "' ;";
        
		
		$result = mysqli_query($con, $qry);
        $record = mysqli_fetch_assoc($result);
        ?>

        <div>
            <?php include ("../../assets/IncludedFiles/navbarTemplate.php"); //?>
        </div>
        <div class="col-sm-10 col-sm-push-2 col-xs-10 insert-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="inblock">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><h1 class="ax"><?php echo $record['title']; ?></h1></br></p>
                                        </div></div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>                            
                                                <a class="aidanews2_img1" href="">
                                                    <img src="<?php echo  '../../assets/images/photos/'.$record['image']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "float: right ;margin: 0px 0px 15px 20px; max-height: 20em ; min-height:14em; width: 30%; height:auto;"/>
                                                </a>
                                            <div class="des">
                                                <?php echo $record['body']; ?>
                                            </div>
                                            </p>
                                        </div></div>
                                  
                                    <div class="row">
                                        <div class="col-sm-12">
											<a href=<?php echo "'edit_news.php?ed_id=".$record['nid']."'"; ?> class="readon">                                                                                     
											<button type="button" value="x" onclick="alert('back to edit')">edit</button><br>
											</a>
                                            <a href=<?php echo "'../../controller/insert/to_db.php?to_id=".$record['nid']."'"; ?> class="readon">                                                                                     
											<button type="button" value="y" onclick="alert('your news will be published')">publish</button><br>
											</a>
											<a href=<?php echo "'to_db.php?to_id=".$record['nid']."'"; ?> class="readon">                                                                                     
											<button type="button" value="y" onclick="alert('your news will be published')">cancel</button><br>
											</a>
											
											<a href="news_insert.php" class="readon">
                                                back to news
                                            </a>
                                        </div>
									</div>

                                </div>

                            </div>
                            
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start footer -->
		
            <div class="col-sm-10 col-sm-push-2 col-xs-12">
                <?php include ("../../assets/IncludedFiles/footer.php")//; ?>
            </div>  
        


        <!-- end of footer -->
    </body>
</html>