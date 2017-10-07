<?php
include 'app.php';
?>
<?getHeader()?>
<body>
    <!-- <nav class="pui-nav primary fixed">
    <div class="inner">
    <div class="title">
    مکان های دیدنی
</div>
</div>
</nav> -->
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
                            <h2>مکان های دیدنی</h2>
                        </div>
                        <?php
                        $getWonderful = mysqli_query($db,"SELECT * FROM `Wonderful_Places` WHERE `active`=1");
                        if (!mysqli_num_rows($getWonderful) >= 1) {
                            echo "<div class='part red-txt'>هیچ مکان دیدنی ای پیدا نشد :(</div>";
                        }
                        else {
                            while ($Wonderful = mysqli_fetch_assoc($getWonderful)) {
                                $State = getState($Wonderful['fstate'],"name");
                                echo "<div class='part'>
                                <h3>$Wonderful[name]</h3>
                                <p>$Wonderful[description]</p>
                                <br>
                                <label class='lbl blue' style='float: left'><i class='material-icons'>location_on</i> $State</label>
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
<?setTitle("مکان های دیدنی")?>
<?getFooter()?>
