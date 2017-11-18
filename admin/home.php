<?php
include '../app.php';
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
                    <div class="chip" id="about" role="presentation" style="margin: 0">
                        <h1 class="center-align">مدیریت</h1>
                        <h3>استان ها</h3>
                        <p>
                            <?
                            $getStatesCount = mysqli_query($db,"SELECT * FROM `States` WHERE `active`=1") OR Error();
                            if ($getStatesCount) {
                                echo "<p>تعداد استان ها : ".mysqli_num_rows($getStatesCount)."</p>";
                            }
                            $getMostPopulation = mysqli_query($db,"SELECT * FROM `States` ORDER BY `Population` DESC");
                            if ($row = mysqli_fetch_assoc($getMostPopulation)) {
                                echo "<p>بیشترین جمعیت : ".$row["name"]."</p>";
                            }
                            $getMostPopulation = mysqli_query($db,"SELECT * FROM `States` ORDER BY `Population` ASC");
                            if ($row = mysqli_fetch_assoc($getMostPopulation)) {
                                echo "<p>کمترین جمعیت : ".$row["name"]."</p>";
                            }
                            function Error() {
                                echo "<span class='red-txt'>مشکلی پیش آمد</span>";
                            }
                            ?>
                    </div>
                </div>
                <div class="space-60"></div>
            </div>
        </div>
    </div>
</div>
<?getButtons()?>
</div>
<?=setTitle("مدیریت", 1)?>
<?getFooter()?>
