<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>upload new research papers</title>
        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style>
           
        </style>

    </head>
    <body>
        <!-- include header file-->
        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-9 col-sm-push-2 col-xs-12 insert-form">
            <div class="container-form">

                <div class="head-form">
                    <h2>Upload Reasearch Papers</h2>
                </div>
                <form action="../../controller/research_papers/paper_upload.php" method="post" enctype="multipart/form-data" name="addroom">

                    <div class="form-group ">
                        <label class= "lbl">Select Paper<span class="red-star" >(.pdf)*</span></label>
                        <input type="file" name="pdf" class="my-text" required><br />
                    </div>       

                    <div class="form-group ">
                        <label class= "lbl">Paper Title<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="title" id="title" required>
                    </div>

                    <div class="form-group ">
                        <label class= "lbl">Author<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="author" id="author"  required>
                    </div>

                    <div class="form-group ">
                        <label class= "lbl">Description</label>

                        <textarea class="form-control my-text" name="description" id="description" rows="4" cols="50"  > </textarea>
                    </div>
                    <div class="form-group ">
                        <label class= "lbl">Research Paper Area<span class="red-star" >*</span></label>
                        <input type="text" class="form-control my-text " name="area" id="area"  required>
                    </div>

                    <div class="form-group ">
                        <label class= "lbl">Category<span class="red-star" >*</span></label>
                        <select id="category" name="category">
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



                    <div class=" col-xs-8">

                        <input type="submit" id="sub_btn" class="submit_btn_insert my-button sb-ppr-btn" name="Submit" value="Submit"/>

                    </div>


                </form>

                <br /> 
                <br />


            </div>


        </div>


        <!-- start footer -->
        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>


    </body>


    <script></script>
</html>