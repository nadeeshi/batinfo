<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/forum.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <title>pie graph</title>


</head>
<body>

    <?php include "../../assets/includedFiles/navbarTemplate.php" ?>

    <div id="page-wrapper" class="col-sm-10 col-sm-push-2 col-xs-12 insert-form">
        <div id="page-inner" class="graph-content">
            <div class="row">
                <div class="col-xs-12">
                    <p class="page-head-line">Welcome to BatsInfo</p>
                    <p class="page-subhead-line">Select Graph Type:- <a href="graph.php">Bar Chart</a>......<a href="">Pie chart</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Population of Bats
                        </div>
                        <div class="panel-body">
                            <div style="margin-top: 20px;">
                                <?php
                                include('../../view/graph/piegraph.html');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=".container-fluid">
        <div class="col-sm-10 col-sm-push-2 col-xs-12">
          <?php include "../../assets/includedFiles/footer.php" ?>
        </div>
    </div>
</body>
</html>
