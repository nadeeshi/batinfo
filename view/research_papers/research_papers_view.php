<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>research papers</title>

        <link rel="stylesheet" href="../../assets/CSS/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../../assets/CSS/research_papers_view.css"/>
        <link rel="stylesheet" href="../../assets/CSS/headline.css"/>
  
        <link rel="stylesheet" href="../../assets/CSS/bats_view.css"/>
        <link rel="stylesheet" href="../../assets/CSS/edit_del_page.css"/>
        <link rel="stylesheet" href="../../assets/CSS/insert_form_css.css">
        <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
        <script src="../../assets/JS/jquary.js"></script>
        <script src="../../assets/JS/jquery.js"></script>
        <script src="../../assets/JS/bootstrap.js"></script>
        <style>body{background-color: beige;}</style>

    </head>
    <body>

        <div>
            <?php include '../../assets/IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <div class="head-view">
                <h2>Reasearch Paper Details</h2>
            </div>
            <div class="table" >


                <?php
                require_once('../../database/dbconnect.php');
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql = "SELECT * FROM research_papers WHERE del_bit='0'";
                $result = mysqli_query($con, $sql);
                ?>
                <table >
                    <thead>
                        <tr>
                            <td class='td th_option-head th_option lbl head'></td>

                            <td class='td th_sname lbl head'>Title</td>
                            <td class='td th_option lbl head'>Action</td>



                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr id="tr_data">';
                            echo '<td class="td_data num lbl">' . $i . '</td>';
                            echo '<td class="td_data lbl"><a target = "_blank" href="../../assets/' . $row['paper'] . '">' . $row['title'] . '</a></td>';

                            $i = $i + 1;



                            echo '<td class="td_data td_data_op lbl"><a class="link" href="research_paper_details.php?id=' . $row['paper_id'] . '" ">view</a></td>';

                            echo '</tr>';
                        }


                        mysqli_close($con);
                        ?>
                    </tbody>
                </table>

            </div>

        </div>


        <div class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
            <?php include "../../assets/IncludedFiles/footer.php" ?>
        </div>


    </body>
</html>