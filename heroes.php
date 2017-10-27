<?php
include 'app.php';
?>
<?getHeader()?>
<body>
<div class="ui">
    <div class="header-box">
        <?getMenu()?>
    </div>
    <div class="box-container">
        <div class="space-60"></div>
        <div class="container">
            <div class="row">
                <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
                    <div class="raised-area">
                        <div class="part">
                            <h2>مشاهیر ایران</h2>
                        </div>
                        <?php
                        $getHero = mysqli_query($db,"SELECT * FROM `Heroes` WHERE `active`=1 ORDER BY `fstate`");
                        if (!mysqli_num_rows($getHero) >= 1) {
                            echo "<div class='part red-txt'>هیچ قهرمانی ای پیدا نشد :(</div>";
                        }
                        else {
                            while ($Hero = mysqli_fetch_assoc($getHero)) {
                                $State = getState($Hero['fstate'],"name");
                                $englishState = getState($Hero['fstate'],"english");
                                echo "<div class='part'>
                                <h3>$Hero[name]</h3>
                                <p>$Hero[description]</p>
                                <a target='_blank' href='article?state=$englishState'>
                                <label class='lbl secondary' style='float: left; cursor: pointer'><i class='material-icons'>location_on</i> $State</label>
                                </a>
                                </div>";
                            }
                        }
                        ?>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=setTitle("مشاهیر",1)?>
<?getFooter()?>
