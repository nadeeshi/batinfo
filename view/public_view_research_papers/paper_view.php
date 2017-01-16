<?php
require_once ("../../database/dbconnect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>view research papers</title>


        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/research_papers_view.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>

        <link rel="stylesheet" href="../../assets/CSS/bats_view.css"/>
        <link rel="stylesheet" href="../../assets/CSS/edit_del_page.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">

        <link rel="stylesheet" href="../../assets/CSS/public_paper_view.css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style >h2{color: white;}</style>
    </head>
    <body>
        <div class="public-background">
            <img src="../../assets/images/bat.jpg" width="100%" height="100%" >
        </div>
        <div>
            <div>
                <?php include '../../assets/includedFiles/mainnav.php' ?>
            </div>
            <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form body-content">

                <div class="head-view">
                    <h2 >Reasearch Papers Categories</h2>
                </div>
                <div class="table" >


                    <?php
                    require_once('../../database/dbconnect.php');
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }


                    $diet = "Diet & Feed";
                    $habits = "Habitats";
                    $anatomy = "Anatomy";
                    $echolocation = "Echolocation";
                    $behaviour = "Behaviour";
                    $conservation = "Conservation";
                    $others = "Others";
                    ?>
                    <table style="width:100%">
                        <tr>
                            <th class="lbl">CATEGORY</th>

                            <th class="lbl">ACTION</th>
                        </tr>
                        <tr>
                            <td>Diet & Feed</td>
<?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $diet . '">view</a></td>'; ?>

                        </tr>
                        <tr>
                            <td>Habitats</td>
                            <?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $habits . '">view</a></td>'; ?>
                        </tr>
                        <tr>
                            <td>Anatomy</td>
                            <?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $anatomy . '">view</a></td>'; ?>

                        </tr>
                        <tr>
                            <td>Echolocation</td>
                            <?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $echolocation . '">view</a></td>'; ?>
                        </tr>
                        <tr>
                            <td>Behaviour</td>
                            <?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $behaviour . '">view</a></td>'; ?>

                        </tr>
                        <tr>
                            <td>Conservation</td>
                            <?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $conservation . '" >view</a></td>'; ?>

                        </tr>
                        <tr>
                            <td>Others</td>
                            <?php echo '<td ><a class="link" href="view_cat_papers.php?category=' . $others . '">view</a></td>'; ?>

                        </tr>
                    </table>

                </div>




            </div>
        </div>




        <!-- start footer -->

        <div>
            <div class="col-xs-12 ">
<?php include "../../assets/includedFiles/footer.php" ?>
            </div>  
        </div>


        <!-- end of footer -->
    </body>
</html>