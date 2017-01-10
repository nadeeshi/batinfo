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



    </style>
    <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/navnew.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <script src="js/jquary.js"></script>
  <script src="js/bootstrapjs.js"></script>

</head>

<body>
<div>
<?php include '../IncludedFiles/navbarTemplate.php'; ?>
</div>

<section class="main_image org">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center">Hi, We Are Here To Help You!</h1>

            </div>
        </div>

    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center"><font size="8px" color="#00bfff"> Frequently Asked Questions on Managing Accounts </font></h1>
            <h1 class="text-center"><font size="6px" color="#483d8b"> Login and Password </font></h1>

        </div>
    </div>
</div>
</head>

<hr />
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How can I login to my account
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    If u sign up for an account u will receive username and password via mail. co u can use to login to ur account
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                       How do i logout from my account
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    In homepage u can find log out button
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                       How can I change back my username?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    u can request a new username through admin panel and u will receive new usernam. so u can use new name instead
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                        How can I change my password?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    go to settings>> password settings>> change password
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="panel-heading" role="tab" id="headingfive">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                        What should i do if i forget the username?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                <div class="panel-body">
                                    contant admin panel and request for the new username
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="panel-heading" role="tab" id="headingsix">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                                        What should I do if i forget the password?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                <div class="panel-body">
                                    contant admin panel and request for the new username
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseseven" class="panel-heading" role="tab" id="headingseven">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
                                        I have to know about the password strength
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                                <div class="panel-body">
                                    password must contain numbers, letters and @ symbol.. must altleast contain  charecters
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