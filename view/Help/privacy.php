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
    <title>content2</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Ubuntu+Condensed';
        @import 'https://fonts.googleapis.com/css?family=Crimson+Text';
        @import 'https://fonts.googleapis.com/css?family=Rokkitt';

        .pdd{
            padding:40px;
            width: 150px;
            height: 150px;
        }

        .main_image{
            background: url(https://cdn3.f-cdn.com/build/css/images/help-support/poly-bg.svg?v=806f0e09bdb52dc729db7d4e3273fe6e&amp%3Bm=6) center no-repeat;
            background-size: 110%;
            background-position-y: 75%;
            padding: 80px 0 40px 0;
        }


        .org{
            background-color: cadetblue;

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
            <div class="col-sm-8 col-sm-push-2 col-xs-12 ">
                <h1 class="text-center">Hi, We Are Here To Help You!</h1>

            </div>
        </div>

      
    </div>

</section>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center"><font size="8px" color="#00bfff"> Privacy And Security </font></h1>

        </div>
    </div>
</div>
<br>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="questions5.php">
                    <button type="button" class="btn btn-primary pdd">
                        <i class="fa fa-user-times fa-4x"style="margin-top: 15px"></i>
                        <br>
                    </button>
                        </a>
                    <br>
                    <span class="ddf">
                    Privacy Violation
                    </span>

                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="questions6.php">
                    <button type="button" class="btn btn-danger pdd">
                        <i class="fa fa-bug fa-4x"style="margin-top: 15px"></i>
                        <br>

                    </button>
                        </a>
                   <br>
                    <span class="ddf">
                    Hacked & Fake Accounts
                    </span>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="questions7.php">
                    <button type="button" class="btn btn-warning pdd">
                        <i class="fa fa-copyright fa-4x"style="margin-top: 15px"></i>
                        <br>

                    </button>
                        </a>
                    <br>
                    <span class="ddf">
                   Copyright Issues
                    </span>

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