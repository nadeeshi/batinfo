<html>
<head>
<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th, td {
        border: none;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

</style>



</head>


<?php
require_once('auth.php');
?>

<?php include("template.php")?>




<body>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">DASHBOARD</h1>
                <h1 class="page-subhead-line">This site is use only Administer of web site,otherwise ..........</h1>
            </div>
        </div>
       <!-- /. ROW  -->

        <!--for get counters-->
        <div class="row" >
            <div class="col-md-10">
                <div class="col-xs-4" >
                    <div class="main-box mb-red" style="width: 200px; height: 80px;">
                        <a href="#">
                            <h3>Bats :
                            <?php
                            ob_start();
                            include("connect.php");
                                $query = mysqli_query($bd,"select count(*) as total from bats_details");
                                $result = mysqli_fetch_array($query);
                                echo $result['total'];
                            ob_end_flush();
                            ?>
                                </h3>
                        </a>
                     </div>
                </div>
                <div class="col-xs-4">
                    <div class="main-box mb-dull" style="width: 200px; height: 80px;">
                        <a href="#">
                            <h3> Admin :
                            <?php
                            ob_start();
                            include("connect.php");
                            $query = mysqli_query($bd,"select count(*) as total from admin_details");
                            $result = mysqli_fetch_array($query);
                            echo $result['total'];
                            ob_end_flush();
                            ?>
                                </h3>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="main-box mb-pink" style="width: 230px; height: 80px;">
                        <a href="#">
                            <h3>Researchers :
                            <?php
                            ob_start();
                            include("connect.php");
                            $query = mysqli_query($bd,"select count(*) as total from researcher_details");
                            $result = mysqli_fetch_array($query);
                            echo $result['total'];
                            ob_end_flush();
                            ?>
                                </h3>
                         </a>
                    </div>
                </div>
             </div>

        </div>
        <!-- / counters -->

        <!--list of research details -->

        <div class="row">

            <div class="col-md-8">
                <h1><a href="../mapDetails/googleMap.php" style="color: deeppink;font-size: 20px"><b>Bats Details</b></a></h1>
            </div>
            <div class="col-md-4">
                <h1><a style="color: deeppink;font-size: 20px" href="http://www.google.com/calendar/event?action=TEMPLATE&text=Example%20Event&dates=20131124T010000Z/20131124T020000Z&details=Event%20Details%20Here&location=123%20Main%20St%2C%20Example%2C%20NY"><b>Go to Google Calander</b></a></h1>
            </div>

        </div>

        <div class="row">
            <div class="col-md-8">
                <img src="../images/1.PNG" style="width: 500px; height: 300px">
            </div>
            <div class="col-md-4" >
                <?php include('../../calander.php');?>
            </div>

        </div>


        <br><br>






        <div class="row">

            <div class="col-md-8">
                <h1 style="color: #500a6f ;font-size: 20px"><b>List Of Research Details</b></h1>

            </div>
        </div>
        
        
        
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View data from the database
                            </div>
                            <div class="panel-body">
                                <h4>view  Details of Research</h4>
                                <div style="margin-top: 20px;">
                                    <?php
                                    include('connect.php');
                                    $select=mysqli_query($bd,"SELECT * FROM research_details order by id desc");
                                    ?>


                                    <div class="display">

                                        <table>
                                            <tr>
                                                <th>RESEARCH  NAME : </th>
                                                <th>CREATED ON : : </th>
                                                <th>VIEW : </th>
                                                <th>Edit</th>
                                                <th>Delete</th>


                                            </tr>


                                            <?php
                                            while($userrow=mysqli_fetch_array($select))
                                            {
                                                $id=$userrow['id'];
                                                $researchName=$userrow['researchName'];
                                                $kingdom=$userrow['kingdom'];
                                                $phylum=$userrow['phylum'];
                                                $created=$userrow['created']
                                                ?>




                                                <tr>
                                                    <td><?php echo $researchName; ?></td>



                                                    <td><?php echo $created; ?></td>


                                                    <td> <a href="../researchDetails/viewResearch.php?id=<?php echo $id; ?>">
                                                            <span class="view" title="View"> View </span></a></td>





                                                    <td> <a href="../researchDetails/editResearch.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a></td>

                                                    <td> <a href="../researchDetails/deleteResearch.php?id=<?php echo $id; ?>"
                                                            onclick="return confirm('Are you sure you wish to delete this Record?');">
                                                            <span class="delete" title="Delete"> Delete </span></a></td>




                                                </tr>




                                            <?php } ?>

                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>


    </div>
 



<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</body>
</html>





