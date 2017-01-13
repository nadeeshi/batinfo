<!DOCTYPE html>

<!DOCTYPE html>
<html>
    <head>
        <title>news</title>
		<link href="https://fonts.googleapis.com/css?family=Alike+Angular" rel="stylesheet"> 
		<link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../../assets/CSS/editnewschild.css">	
		<link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
		<link href="../../assets/CSS/footer.css" rel="stylesheet">
		<script src="../../assets/JS/jquery.js"></script> 
		<script src="../../assets/JS/bootstrap.js"></script>
		
		<script>
			function submitcomment() {

                            var request;

                            try {

                            request= new XMLHttpRequest();

							}

                        catch (tryMicrosoft) {

                            try {

                                request= new ActiveXObject("Msxml2.XMLHTTP");
                            }

                            catch (otherMicrosoft) 
                            {
                                try {
                                    request= new ActiveXObject("Microsoft.XMLHTTP");
                                }

                                catch (failed) {
                                    request= null;
                                }
                            }
                        }


                        var webpage= location.href;

                       // position= webpage.lastIndexOf("/"); 
                        position= webpage.lastIndexOf("="); 

                        var lastpart= webpage.substring(position + 1);

//var period= lastpart.indexOf(".");

//var complete= lastpart.substring(0, period);

//var id = "ctl03_Tabs1";
//var lastChar = lastpart[lastpart.length - 1];

//var period= lastpart.indexOf(lastChar);

//var complete= lastpart.substring(0, period+1);
//window.alert(lastpart);
                        var complete=lastpart;

                        complete= complete.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&\=])/g, "_");
//complete= complete1.replace(/?/g, "_");
//window.alert(complete);

                        var url= "usercomments1.php";
                        var username= document.getElementById("name_entered").value;
                        document.getElementById("name_entered").value='';

                        var usercomment= document.getElementById("comment_entered").value;
                        document.getElementById("comment_entered").value='';

                        var vars= "name="+username+"&comment="+usercomment+"&webpage="+complete;
                        request.open("POST", url, true);

                        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                        request.onreadystatechange= function() {
                            if (request.readyState == 4 && request.status == 200) {
                                var return_data=  request.responseText;
                                document.getElementById("showcomments").innerHTML= return_data;
                            }
                        }

                        request.send(vars);


                        }

                        document.getElementById('numquest').value='';
		
		</script>
		
		
		
    </head>
    <body onload="submitcomment();">
        <div>
        <?php include ("../../assets/IncludedFiles/navbarTemplate.php"); ?>
        </div>
        <?php
		include ('../../database/cnm_db_con.php');//dbconnect.php
		$qry = "SELECT * FROM photos WHERE id = '" . $_GET['photoid'] . "' ;";
        $result = mysqli_query($con, $qry);
        $record = mysqli_fetch_assoc($result);
        ?>

        
		
		
		
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="com">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><h1 class="ax"><?php echo $record['caption']; ?></h1></br></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>                            
                                                <a class="aidanews2_img1" href="">
                                                    <img src="<?php echo "../../assets/images/photos/" . $record['location']; ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "float: right ;margin: 0px 0px 15px 20px; max-height: 20em ; min-height:14em; width: 30%; height:auto;"/>
                                                </a>
                                            <div class="des">
                                                <?php echo $record['desc']; ?>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                    <!--
        <a class="aidanews2_img1" href="">
            <img src="<?php //echo "photos/" . $record['location'];  ?>" alt="100-000-awarded-in-grants-to-battle-wns" style = "margin:auto; max-height: 32em ; min-height:14em; width: 45%; height:auto;"/>
        </a>
        <div class="des">
            <h1 class="ax">
                                    <?php //echo $record['caption']; ?></br>

            </h1>
                                            <p><?php //echo $record['desc']; ?></p>

        </div>-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="newst.php" class="readon">
                                                back to news
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            <!---comment goes here-->
                    <div class="com">
                            <table>
                                <p>add comments</p>
                                <tr>
                                <td></td>
                                <td>Name:</td>
                                </tr>


                                <tr>
                                <td></td>
                                <td>
                                    <input type="text" id="name_entered" id ="numquest"/>
                                </td>
                                </tr>

                                <tr>
                                <td></td>
                                <td>Comment:</td>
                                </tr>


                                <tr>
                                <td></td>
                                <td>
                                    <textarea cols="35" rows="6" id="comment_entered" value="y" ></textarea>
                                </td>
                                </tr>

                                <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="Post" onclick="submitcomment();" />
                                </td>
                                </tr>

                            </table>

                            <br><br>
                            <div id="showcomments"></div>
                    </div>
                    
                        </div>
                                      <!--  <div class="col-md-2">
                            </div>-->
                        </div>
                    </div>
					
					<!--comment goes here-->
			<div class="row">
                            <div class="col-md-12">
							<?php //include('form2.php');?>
                            
                            <!--comment prev here-->
							
						
                            </div>
                        </div>
					
                </div>
            </div>
        </div>
		
        <!-- start footer -->

        
            <div class="col-xs-10 col-xs-push-2">
                <?php include ("../../assets/IncludedFiles/footer.php"); ?>
	
            </div>  
        


        <!-- end of footer -->
    </body>
</html>
