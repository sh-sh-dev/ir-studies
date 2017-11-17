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
                            <h2>لیست استان ها</h2>
                        </div>
                        <?php
                        $getStates = mysqli_query($db,"SELECT * FROM `States` WHERE `active`=1");
                        if (!mysqli_num_rows($getStates) >= 1) {
                            echo "<div class='part red-txt'>هیچ استانی پیدا نشد :(</div>";
                        }
                        else {
                            while ($State = mysqli_fetch_assoc($getStates)) {
                                $Population = formatted_number($State['Population']);
                                $formatted = number_format($State['Population']);
                                echo "<div class='part d-flex v-a-center'>
                                <div class='full-width cleared' style='max-width: calc(100% - 65px)'>
                                <h3 class='elide-text'>$State[name]</h3>
                                <small style='font-size: 120%' class='muted-txt bold-txt elide-text d-block'>$State[ins_sentense]</small>
                                <p class='elide-text'>$State[description]</p>
                                <label class='lbl gray' style='float: left;'><i class='material-icons'>location_city</i> مرکز استان:  $State[city_center]</label>
                                <label id='ppl-label-$State[n]' data-tooltip-place='top' data-tooltip-container='#ppl-label-$State[n]'
                                data-tooltip='$formatted نفر' class='lbl secondary' style='float: left;'>
                                <i class='material-icons'>people</i> جمعیت:  $Population نفر</label>
                                </div>
                                <div style='width: 65px' class='center-align'>
                                    <a class='btn gray fab simple' href='article?state=$State[english]' target='_blank'><i class='material-icons' style='transform: scaleX(-1)'>open_in_new</i></a>
                                </div>
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
    <?getButtons()?>
</div>
<?=setTitle("لیست استان ها",1)?>
<?getFooter()?>
