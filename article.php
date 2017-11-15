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
                    <span id="ppl_num" style="cursor: default" data-tooltip-container='#ppl_num' data-tooltip="<?=number_format(getState($State,"Population"))?> نفر">
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
            <?php
            $StateCode = getState($State,"n");
            $getSouvenirs = mysqli_query($db,"SELECT * FROM `Souvenir` WHERE `fstate`=$StateCode AND `active`=1");
            if (mysqli_num_rows($getSouvenirs) >= 1) {
                $n = 0;
                $i = mysqli_num_rows($getSouvenirs);
                echo '<div class="st-souvenir">';
                echo '<b>سوغات</b>';
                while ($Souvenirs = mysqli_fetch_assoc($getSouvenirs)) {
                    echo "$Souvenirs[name]";
                    $n++;
                    if ($n !== $i) {
                        echo ' ، ';
                    }
                }
                echo '</div>';
            }
            ?>
            <?php
            $StateCode = getState($State,"n");
            $getMC = mysqli_query($db,"SELECT * FROM `Major_cities` WHERE `fstate`=$StateCode AND `active`=1");
            $getMCM = mysqli_query($db,"SELECT * FROM `Major_cities` WHERE `fstate`=$StateCode AND `active`=1");
            if (mysqli_num_rows($getMC) >= 1) {
                echo '<ul class="st-impcities">';
                while ($MC = mysqli_fetch_assoc($getMC)) {
                    echo "<li>
<button class='btn simple block' data-modal-target='#description-modal-$MC[n]'>$MC[name]</button>
</li>";
                }
                echo '</ul>';
                while ($MCM = mysqli_fetch_assoc($getMCM)) {
                    echo "
<div class=\"pui-modal\" id=\"description-modal-$MCM[n]\">
                <div class=\"inner\">
                    <div class=\"header\">
                        <span class=\"modal-title\">$MCM[name]</span>
                        <button class=\"close modal-close material-icons\">close</button>
                    </div>
                    <div class=\"body\">
                    $MCM[description]
                    </div>
                    <div class=\"footer\">
                        <button class=\"btn simple secondary modal-close\">بستن</button>
                    </div>
                </div>
            </div>";
                }
            }
            ?>
            <main role="main">
                <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
                    <div class="container">
                        <div class="row">
                            <p style="white-space: pre-line;word-wrap: break-word;word-break: keep-all;">
                                <?=getState($State,"description")?>
                            </p>
                            <?php
                            $StateCode = getState($State,"n");
                            ?>
                            <?php
                            $getWP = mysqli_query($db,"SELECT * FROM `Wonderful_Places` WHERE `fstate`=$StateCode AND `active`=1");
                            if (mysqli_num_rows($getWP) >= 1) {
                                ?>
                                <h3>مکان های دیدنی <?=$StateName?></h3>
                                <section class="cleared">
                                    <?php
                                    while ($WPS = mysqli_fetch_assoc($getWP)) {
                                        echo "<div class='pui-col xs-12' style='padding: 5px'>
                                        <div class='chip' style='margin: 0'>
                                        <h5 style='font-weight: 400'>$WPS[name]</h5>
                                        <p style='font-weight: bold' class='muted-txt'>$WPS[description]</p>
                                        </div>
                                        </div>";
                                    }
                                    ?>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            $getHeroes = mysqli_query($db,"SELECT * FROM `Heroes` WHERE `fstate`=$StateCode AND `active`=1");
                            if (mysqli_num_rows($getHeroes) >= 1) {
                                ?>
                                <h3>مشاهیر <?=$StateName?></h3>
                                <section class="cleared">
                                    <?php
                                    while ($Heroes = mysqli_fetch_assoc($getHeroes)) {
                                        echo "<div class='pui-col xs-12' style='padding: 5px'><div class='chip' style='margin: 0'><h5 style='font-weight: 400'>$Heroes[name]</h5><p style='font-weight: bold' class='muted-txt'>$Heroes[description]</p></div></div>";
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
                                <div class="images cleared">
                                    <?php
                                    while ($Pics = mysqli_fetch_assoc($getPics)) {
                                        $url = str_replace("*url*",getSetting('url'),$Pics["url"]);
                                        if (!empty($Pics["description"])) {
                                            echo "<div class='pui-col xs-12 sm-6 md-4 lg-3 center-align' data-tooltip='$Pics[description]'>";
                                        }
                                        else {
                                            echo "<div class='pui-col xs-12 sm-6 md-4 lg-3 center-align'>";
                                        }
                                        echo "<img src='$url' class='img img-raised'>";
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