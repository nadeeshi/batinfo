
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>upadate reserach papers</title>
        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
         
        <link rel="stylesheet" href="../../assets/CSS/re_paper_update.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style>body{background-color: beige;}
        
            .edit{font-size: 15px;}
        </style>
       
    </head>
    <body>
        <!-- include header file-->
       
         <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>
        
            <?php
            require_once('../../database/dbconnect.php');

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $paper_id = $_GET['paper_id'];

            $result = mysqli_query($con, "SELECT * FROM research_papers WHERE paper_id= '$paper_id' ");

            $details = mysqli_fetch_array($result);
            
      
            

            if (!$details) {
                 printf("Error: %s\n", mysqli_error($con));
                echo "<p class='msg'>Error Occur! <p>";

                echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';
                exit();
            }

            mysqli_close($con);
            ?>


        <div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form">
            <div class="container-form">

                <div class="head-form">
                    <h2>Edit the Reasearch Paper</h2>
                </div>
            <form action="../../controller/research_papers/research_papers_update_core.php" method="post" enctype="multipart/form-data" >
                    <div>

                        <a class="link" onclick="return myFunction2();" >
                            <span class="glyphicon_my glyphicon glyphicon-pencil " ><span class="edit">Edit Fields</span></span>
                            <br><br><br><br>
                            

                            <!-- button, make disabled text fields editable -->
                        </a>
                    </div>
                    <div class="form-group ">
                         <div class="pdf-link">
                    <a target="_blank" class="pdf-link" href="../../assets/<?php echo $details['paper'] ?> ">Click Here to View the Research Paper</a><br><br>
                    </div>
                        <label class= "lbl">Select new paper<span class="red-star" >(.pdf)*</span></label>
                        <input type="file" name="pdf" id="pdf_file" class="my-text" disabled><br />
                         <input type="hidden" name="paper" id="paper" value="<?php echo $details['paper'] ?> " >
                    </div> 
                    
               
                

                    <div class="form-group ">
                        <label class= "lbl">Paper Title<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="title" id="title" value="<?php echo $details['title'] ?> " required disabled>
                         <input type="hidden" name="paper_id" id="paper_id" value="<?php echo $details['paper_id'] ?> " >
                    </div>

                    <div class="form-group ">
                        <label class= "lbl">Author<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="author" id="author" value="<?php echo $details['author'] ?> " required disabled>
                    </div>
                   
                    <div class="form-group ">
                        <label class= "lbl">Description</label>
                      
                        <textarea class="form-control my-text" name="description" id="description" rows="4" cols="50" disabled ><?php echo $details['description'] ?> </textarea>
                    </div>
                    <div class="form-group ">
                        <label class= "lbl">Research Paper Area<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="area" id="area" value="<?php echo $details['area'] ?> " required disabled>
                    </div>
                    <div class="form-group ">
                        <label class= "lbl">Category<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="category" id="category1" value="<?php echo $details['category'] ?> " required disabled><br><br>
            
                        <select id="category2" name="category" disabled>
                          <option value="Diet & Feeding">Diet & Feed</option>
                          <option value="Habitats">Habitats</option>
                          <option value="Anatomy">Anatomy</option>
                          <option value="Echolocation">Echolocation</option>
                          <option value="Behaviour">Behaviour</option>
                          <option value="Anatomy">Anatomy</option>
                          <option value="Conservation">Conservation</option>
                          <option value="Others">Others</option>
                        </select>
                    </div>
                        

                    

                    <div class=" col-xs-10">

                        <input type="submit" id="sub_btn" class="submit_btn_insert my-button ppr-btn" name="Submit" value="Submit" disabled/>

                    </div>


                </form>

                <br /> 
                <br />


            </div>

           
        </div>


        <!-- start footer -->
            <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
                <?php include "../../assets/IncludedFiles/footer.php"?>
            </div>


    </body>

  
    <script>
                //make disabled text fields editable

                function myFunction2() {
                    document.getElementById("sub_btn").disabled = false;

                    document.getElementById("category2").disabled = false;
                    document.getElementById("pdf_file").disabled = false;
                    document.getElementById("title").disabled = false;
                    document.getElementById("author").disabled = false;
                    document.getElementById("description").disabled = false;
                    document.getElementById("area").disabled = false;
                    document.getElementById("category").disabled = false;
                }
    </script>
</html>