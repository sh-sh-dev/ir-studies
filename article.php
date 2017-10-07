<?php
include 'app.php';
if (empty($_GET["state"]) || !ValidState($_GET["state"])) header('location:home.php');
$State = $_GET["state"];
$StateName = getState($State,"name");
?>
<?getHeader()?>
<body>
    <div class="ui">
        <div class="header-box"><?getMenu()?></div>
        <div class="box-container">
            <div class="heroic-header" style="background-image: url(assets/dist/img/test-bg.svg)">
                <div class="content">
                    <h3><?=getState($State,"name")?></h3>
                    <span><?=getState($State,"ins_sentense")?></span>
                </div>
            </div>
            <div class="st-stats">
                <div class="pui-col xs-12 md-6">
                    <i class="material-icons">supervisor_account</i>
                    <b id="ppl_title">جمعیت</b>
                    <span id="ppl_num" data-tooltip="<?=number_format(getState($State,"Population"))?> نفر">
                        <?=
                        formatted_number(getState($State,"Population"));
                        ?>
                    </span>
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
                            $getHeroes = mysqli_query($db,"SELECT * FROM `Heroes` WHERE `fstate`=$StateCode AND `active`=1");
                            if (mysqli_num_rows($getHeroes) >= 1) {
                                ?>
                                <h3>مشاهیر <?=$StateName?></h3>
                                <section>
                                    <?php
                                    while ($Heroes = mysqli_fetch_assoc($getHeroes)) {
                                        echo "<div class='chip'><h5 style='font-weight: 400'>$Heroes[name]</h5><p style='font-weight: bold' class='muted-txt'>$Heroes[description]</p></li>";
                                    }
                                    ?>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            $getWP = mysqli_query($db,"SELECT * FROM `Wonderful_Places` WHERE `fstate`=$StateCode AND `active`=1");
                            if (mysqli_num_rows($getWP) >= 1) {
                                ?>
                                <!--                        <hr>-->
                                <h3>مکان های دیدنی <?=$StateName?></h3>
                                <section>
                                    <?php
                                    while ($WPS = mysqli_fetch_assoc($getWP)) {
                                        echo "<div class='chip'>
                                        <h5 style='font-weight: 400'>$WPS[name]</h5>
                                        <p style='font-weight: bold' class='muted-txt'>$WPS[description]</p>
                                        </li>
                                        </div>";
                                    }
                                    ?>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            $getPics = mysqli_query($db,"SELECT * FROM `Pics` WHERE `fstate`=$StateCode AND `active`=1");
                            if (mysqli_num_rows($getPics) >= 1) {
                                ?>
                                <h3>تصاویر <?=$StateName?></h3>
                                <div class="images">
                                    <?php
                                    while ($Pics = mysqli_fetch_assoc($getPics)) {
                                        echo "<div class='pui-col xs-12 sm-6 md-4 lg-3 center-align'>";
                                        echo "<img src='$Pics[url]'>";
                                        echo "$Pics[description]";
                                        echo "</div>";
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?=setTitle(getState($State,"name"),1)?>
    <?getFooter()?>
