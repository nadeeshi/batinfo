<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>update & delete reserach papers</title>
      
        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
        <link rel="stylesheet" href="../../assets/CSS/re_paper_update_home.css"/>
        <link rel="stylesheet" href="../../assets/CSS/edit_del_page.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/edit_del_confimtions.js"></script>
        
       <script src="../../assets/JS/jquery.js"></script>
       <script src="../../assets/JS/bootstrap.js"></script>
        
 
    </head>
    <body>

        <div>
             <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>
       
            <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
                
                <div class="table" >


                    <?php
                   require_once('../../database/dbconnect.php');
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $researcher_id = $_SESSION['usr_id'];
                   
                    $result = mysqli_query($con, "SELECT * FROM research_papers WHERE del_bit='0' AND researcher_id= '$researcher_id'");



                    mysqli_close($con);
                    ?>
                    <h3>Upadte Research Papers</h3><br><br>
                    <table >
                        <thead>
                            <tr>
                                <td class='td th_option lbl head'></td>
                                <td class='td th_sname_ppr lbl head'>Title</td>
                                

                                <td class='td th_option lbl head'>Action</td>
                               

                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr id="tr_data">';
                                echo '<td class="td_data num lbl">' . $i . '</td>';
                                echo '<td class="td_data lbl">' . $row['title'] . '</td>';
                                $i = $i + 1;

                                echo '<td class="td_data td_data_op lbl"><a class="link" href="research_papers_update.php?paper_id='. $row['paper_id'] . '" onclick="return myFunction_update();">edit</a></td>';

                                

                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                        
                    </table>
                    
                    
                    <div class="col-xs-8">
        <button onclick="window.location.href = '../bats_view/bats_view.php'" class="my-button submit_btn_edit my-buttons" id ="myBtn">Back</button>


            </div>
                </div>
                    
             </div>
     
        
         <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>


    </body>
</html>