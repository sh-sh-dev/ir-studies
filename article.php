<?php
include 'app.php';
if (empty($_GET["state"]) || !ValidState($_GET["state"])) header('location:index.php');
$State = $_GET["state"];
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مطلب سفید!</title>
    <meta name="theme-color" content="#aeea00">
    <link rel="stylesheet" href="assets/demo.css">
</head>
<body>
    <nav class="pui-nav fixed transparent" id="navigation" role="navigation">
        <div class="inner">
            <div class="sidenav-toggle">
                <button class="sidenav-control material-icons">menu</button>
            </div>
            <div class="title">
<?=getState($State,"name")?>
            </div>
            <ul class="sidenav">
                <div class="sidenav-title">
                    ایران شناسی
                </div>
                <li><a href="index.php">
                    خانه
                </a></li>
            </ul>
            <div class="sidenav-overlay"></div>
        </div>
    </nav>
    <div class="heroic-header" style="background-image: url(assets/dist/img/test-bg.svg)">
        <div class="content">
            <h3><?=getState($State,"name")?></h3>
            <span><?=getState($State,"ins_sentense")?></span>
        </div>
    </div>
    <div class="st-stats">
        <!-- yes, "stats". AMAR!آمار! -->
        <div class="pui-col xs-12 md-6">
            <i class="material-icons">supervisor_account</i>
            <b id="ppl_title">جمعیت</b>
            <span id="ppl_num"><?=getState($State,"Population")?></span>
        </div>
        <div class="pui-col xs-12 md-6">
            <i class="material-icons">location_city</i>
            <b>مرکز استان</b>
            <span><?=getState($State,"city_center")?></span>
        </div>
    </div>
    <main role="main">
        <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
            <div class="container">
                <div class="row">
                    <?=getState($State,"description")?>
                    <hr>
                    <?php
                    $StateCode = getState($State,"n");
                    $getHeroes = mysqli_query($db,"SELECT * FROM `Heroes` WHERE `fstate`=$StateCode");
                    if (mysqli_num_rows($getHeroes) >= 1) {
                        ?>
                        <h3>مشاهیر استان</h3>
                        <section>
                    <?php
                        while ($Heroes = mysqli_fetch_assoc($getHeroes)) {
                            // echo "<div class='chip' data-popover='$Heroes[description]' data-popover-place='bottom>$Heroes[name]</li>";
                            echo "<div class='chip'><h5 style='font-weight: 400'>$Heroes[name]</h5><p style='font-weight: bold' class='muted-txt'>$Heroes[description]</p></li>";
                        }
                        ?>
                    </section>
                    <?php
                    }
                    ?>
<!--                    <hr>-->
<!--                    <h3>مکان های دیدنی</h3>-->
<!--                    اینجا توی چند تا کارت، جاهای دیدنی رو میزاریم.-->
<!--                    <hr>-->
<!--                    <div class="images">-->
<!--                        <div class="pui-col xs-12 sm-6 md-4 lg-3">-->
<!--                            یه عکس!-->
<!--                        </div>-->
<!--                        <div class="pui-col xs-12 sm-6 md-4 lg-3">-->
<!--                            یه عکس!-->
<!--                        </div>-->
<!--                        <div class="pui-col xs-12 sm-6 md-4 lg-3">-->
<!--                            یه عکس!-->
<!--                        </div>-->
<!--                        <div class="pui-col xs-12 sm-6 md-4 lg-3">-->
<!--                            یه عکس!-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </main>
</body>
<script src="assets/dist/jquery-3.1.1.min.js"></script>
<script src="assets/dist/pui.min.js"></script>
<script src="assets/demo.min.js"></script>
</html>
