<?php
require "../db/DatabaseOperation.php";

$key = "";

if(isset($_GET['key'])){
    $key = clean(escape($_GET['key']));
} else {
    redirect("../");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Kasosyo - Lalala</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet"/>


</head>

<body class="index-page">
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#">
                <div class="logo-container">
                    <div class="logo">
                        PUT LOGO HERE<!--<img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">  -->
                    </div>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        Login
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">


    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <div class="title">
                    <h2>TIM CORN-EJOS</h2>
                </div>

                <?php
                $res = viewAll($t_item);
                foreach ($res as $row){
                    //Print every item
                    ?>
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-3 col-md-offset-2">
                                <form action="./store.php">
                                        <button type="submit" name=store value="<?php echo $row["store_id"]?>" >
                                            <img class="thumbnail" height="300" width="150" src=<?php echo $row["image"];?> alt=<?php echo $row["name_desc"];?> />
                                        </button>
                                </form>
                            </div>
                            <div class="col-xs-4 col-sm-7 col-md-7">
                                <a><h4><?php echo $row["name_desc"]." <br/>at ".$row["unit_price"]; ?></h4></a>
                                <p><?php $row["unit_price"]; ?></p>
                            </div>
                        </div>
                    <?php
                    echo "<br/>";
                }
                ?>

                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-md-offset-2">
                        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
                    </div>
                    <div class="col-xs-4 col-sm-7 col-md-7">
                        <a href="#"><h4>Title hehehe</h4></a>
                        <p>lorem ipsum blah blah mwah mwah tsup tsup sorry sorry neke neke noko noko
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-md-offset-2">
                        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
                    </div>
                    <div class="col-xs-4 col-sm-7 col-md-7">
                        <a href="#"><h4>Title hehehe</h4></a>
                        <p>lorem ipsum blah blah mwah mwah tsup tsup sorry sorry neke neke noko noko
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-md-offset-2">
                        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
                    </div>
                    <div class="col-xs-4 col-sm-7 col-md-7">
                        <a href="#"><h4>Title hehehe</h4></a>
                        <p>lorem ipsum blah blah mwah mwah tsup tsup sorry sorry neke neke noko noko
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="../js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="../js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>
</html>


