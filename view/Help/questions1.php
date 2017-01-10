
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
            <h1 class="text-center"><font size="8px" color="#00bfff"> Frequently Asked Questions on<br> Account Settings </font></h1>
            <h1 class="text-center"><font size="6px" color="#483d8b"> Creating an Account </font></h1>

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
                                        How do I sign up for an account?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                   1. You have to go to our home page <br>
                                   2. And you can find sign up button on the tope of the page <br>
                                   3. There you can sign for a new account by filling the form 
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Why my user name was rejected during sign up?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                     1. It might be already taken by another user<br>
                                     2. You have to try with new username 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                        Why my password was rejected during sign up?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    1. It might be already taken by another user <br>
                                    2. Otherwise it can include some incorrect characters.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="panel-heading" role="tab" id="headingfive">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                        I didn't get my username and password via mail
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                <div class="panel-body">
                                    1. Your mail address might be wrong <br>
                                    2. For more you can contact admin panel
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="panel-heading" role="tab" id="headingsix">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                                        What is researcher account and what makes it to be differ?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                <div class="panel-body">
                                    1. It's more than as a public user <br>
                                    2. Researcher user accounts are for the users who do researches about bats <br>
                                    3. There are many more features in researcher account than public user
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseseven" class="panel-heading" role="tab" id="headingseven">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
                                        What is needed to create a researcher account?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                                <div class="panel-body">
                                    1. Your qualifications <br>
                                    2. Your relevent degree information <br>
                                    3. Show these to admin panel
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                                <div data-toggle="collapse" data-parent="#accordion" href="#collapseeight" class="panel-heading" role="tab" id="headingeight">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
                                            What is public user account about?
                                        </a>
                                        <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                    </h4>
                                </div>
                                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                                    <div class="panel-body">
                                        1. Its a common account to view post as an common user <br>
                                        2. There can be some restrictions
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