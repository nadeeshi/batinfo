<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>bar graph</title>
    <link href="../../assets/CSS/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../assets/CSS/forum.css" rel="stylesheet" type="text/css">
    <link href="../../assets/CSS/navbar1n2.css" rel="stylesheet" type="text/css">
    <script src="../../assets/JS/jquery.js"></script>
    <script src="../../assets/JS/bootstrap.js"></script>
</head>

<body>

<?php include "../../assets/includedFiles/navbarTemplate.php" ?>

<div id="page-wrapper" class="col-sm-10 col-sm-push-2 col-xs-12 insert-form insert-form-graph">
    <div id="page-inner" class="graph-content">
        <div class="row">
            <div class="col-xs-10 page-head-graph">
                <p>Welcome to BatsInfo</p>
            </div>
            <div class="col-xs-10 graph-content">
                <p>'''...Over 1,100 different species of bats have been identified. This is approximately 20% of all of the mammals in the world.Bat Species Over 1,100 different species of bats have been identified. This is approximately ¼ of all of the mammals in the world. They aren’t out there trying to get tangled up in the hair of humans either...'''
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 graph">
                <div class="panel panel-default" style="background-color: rgba(76, 71, 67, 0.12)">
                    <div class="panel-heading">
                        Population of Bats in BatsInfo
                    </div>
                    <div class="panel-body">
                        <div style="margin-top: 20px;">
                            <?php
                            include('../../view/graph/bargraph2.html');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start footer -->
<div class="col-sm-10 col-sm-push-2 col-xs-12">
    <?php include "../../assets/includedFiles/footer.php" ?>
</div>

</body>
</html>
