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
            <h1 class="text-center"><font size="8px" color="#00bfff"> Frequently Asked Questions on<br> Managing Accounts </font></h1>
            <h1 class="text-center"><font size="6px" color="#483d8b"> Your Profile and Settings </font></h1>

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
                                        How can I add information to my profile
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    1st u have to login to ur account>> profile settings>> edit info>> add info
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        How can I edit or remove information in my profile
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    1st u have to login to ur account>> profile settings>> edit info>> remove info
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

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                        How can I upload a profile picture to my account?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">*
                                    1st u have to login to ur account>> profile settings>> edit info>> click your profile>> change photo
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
 
                           <div data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="panel-heading" role="tab" id="headingfive">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                        How can I change or remove my profile picture?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                <div class="panel-body">
                                    1st u have to login to ur account>> profile settings>> edit info>> click your profile>> remove photo
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="panel-heading" role="tab" id="headingsix">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                                        How to post an article through my account?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                <div class="panel-body">
                                    1st u have to login to ur account>> click  add post> post an article
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseseven" class="panel-heading" role="tab" id="headingseven">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
                                        How to add medias to my article?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                                <div class="panel-body">
                                    1st u have to login to ur account>> click  add post> post an article> click add photos> select the directory and post
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseeight" class="panel-heading" role="tab" id="headingeight">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
                                        Who can see my articles? can I change it?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                                <div class="panel-body">
                                    first u have to login >>> when u post an article , u gcan change the audience who can see the post 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsenine" class="panel-heading" role="tab" id="headingnine">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="true" aria-controls="collapsenine">
                                        How do I share my article to social websites?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
                                <div class="panel-body">
                                    click on the article which u have posted, then click share, then u can choose where do u wanna share it? 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseten" class="panel-heading" role="tab" id="headingten">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="true" aria-controls="collapseten">
                                        Can I share an article of an other user?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
                                <div class="panel-body">
                                    same as sharing ur article .. just click it on their post and share it
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" class="panel-heading" role="tab" id="headingeleven">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="true" aria-controls="collapseeleven">
                                        What is forum discussion means?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseeleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeleven">
                                <div class="panel-body">
                                    its an discussion post. researcher can start an discussion otheres can comment theri discussion on a specific topic . 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsetwl" class="panel-heading" role="tab" id="headingtwl">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwl" aria-expanded="true" aria-controls="collapsetwl">
                                        How can I open a forum discussion?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsetwl" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwl">
                                <div class="panel-body">
                                    1st u have to login to ur account>> click  add discussion> post a discussion topic
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsethrtn" class="panel-heading" role="tab" id="headingthrtn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethrtn" aria-expanded="true" aria-controls="collapsethrtn">
                                        Can I delete an ongoing discussion which was started by me?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsethrtn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthrtn">
                                <div class="panel-body">
                                    you can delete an discussion  with the permission of an admin 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefrtn" class="panel-heading" role="tab" id="headingfrtn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefrtn" aria-expanded="true" aria-controls="collapsefrtn">
                                        How to reply in a forum discussion?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefrtn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfrtn">
                                <div class="panel-body">
                                    under the discussion, ther u can find a reply discussion button. so u can reply by clicking there
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsefftn" class="panel-heading" role="tab" id="headingfftn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetfftn" aria-expanded="true" aria-controls="collapsefftn">
                                        Can I reply with media in a forum discussion?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsefftn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfftn">
                                <div class="panel-body">
                                   you can add medias in while you commenting under the discussion by add media button
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsesxtn" class="panel-heading" role="tab" id="headingsxtn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesxtn" aria-expanded="true" aria-controls="collapsesxtn">
                                        How can I chat with other users privately?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsesxtn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsxtn">
                                <div class="panel-body">
                                    first u have to login to ur account. click messages. select compose message. select recepient. send message
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsesvntn" class="panel-heading" role="tab" id="headingsvntn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetsvntn" aria-expanded="true" aria-controls="collapsesvntn">
                                        Can I send multi media files to other users via chat?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsesvntn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsvntn">
                                <div class="panel-body">
                                    first u have to login to ur account. click messages. select compose message. select recepient. add files.. select files u have to add>> send message
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapseetn" class="panel-heading" role="tab" id="headingetn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetetn" aria-expanded="true" aria-controls="collapseetn">
                                        How can I search specific mammals through google maps?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapseetn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingetn">
                                <div class="panel-body">
                                    first u have to login to ur account. go to search mammals through maps>> type the name of the mammal> click search
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsenntn" class="panel-heading" role="tab" id="headingnntn">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenntn" aria-expanded="true" aria-controls="collapsenntn">
                                        Can I change language for my account?

                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsenntn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnntn">
                                <div class="panel-body">
                                    go to settings>> change language>> select the language ** but there are limited languages
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div data-toggle="collapse" data-parent="#accordion" href="#collapsetwnty" class="panel-heading" role="tab" id="headingtwnty">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwnty" aria-expanded="true" aria-controls="collapsetwnty">
                                        Where can I find settings for other purposes?
                                    </a>
                                    <span  class="pull-right">
                                        <i class="fa fa-caret-square-o-down"></i>
                                    </span>
                                </h4>
                            </div>
                            <div id="collapsetwnty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwnty">
                                <div class="panel-body">
                                    after u login to ur account, u can find settings in menu option. there u can see the settings bar
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