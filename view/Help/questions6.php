<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>content</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @import 'https://fonts.googleapis.com/css?family=Ubuntu+Condensed';
        @import 'https://fonts.googleapis.com/css?family=Crimson+Text';
        @import 'https://fonts.googleapis.com/css?family=Rokkitt';

        .pdd{
            padding:40px;
        }

        .main_image{
            background: url(https://cdn3.f-cdn.com/build/css/images/help-support/poly-bg.svg?v=806f0e09bdb52dc729db7d4e3273fe6e&amp%3Bm=6) center no-repeat;
            background-size: 110%;
            background-position-y: 75%;
            padding: 80px 0 40px 0;
        }


        .org{
            background-color: #fc8c14;
        }

        h1{
            font-family: 'Ubuntu Condensed', sans-serif;
        }

        .ddf
        {
            font-family: 'Rokkitt',
            size: 60px;

        }
        #maindiv{
            position: absolute;
            margin-left: 15%;
            z-index: -1;
        }

        #slt{
            margin-left: -6%;
        }




    </style>
    <link href="css/bootstrap.css" rel="stylesheet">
 <link href="../../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
  <link href="css/footer.css" rel="stylesheet">
  <script src="js/jquary.js"></script>
  <script src="js/bootstrapjs.js"></script>

</head>

<body>
<div>
<?php include '../../assets/includedFiles/navbarTemplate.php' ?>
</div>

<div id="maindiv">
<section class="main_image org">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="slt">
                <h1 class="text-center">Hi, We Are Here To Help You!</h1>

            </div>
        </div>

    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="slt">
            <h1 class="text-center"><font size="8px" color="#00bfff"> Frequently Asked Questions on <br> Privacy and Security </font></h1>
            <h1 class="text-center"><font size="6px" color="#483d8b"> Hacked and Fake accounts </font></h1>

        </div>
    </div>
</div>
</head>

<hr />
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="slt">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        My account was hacked by someone
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    1. Contact admin panel urgently
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        I can find some fake accounts in this system.
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    1. Inform to admin panel if you suspects someone
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="panel-heading" role="tab" id="headingfive">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                        Can I block someone?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                <div class="panel-body">
                                   1. No. You cannot block other users
                                   2. And you cannot be blocked
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>