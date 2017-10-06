<?php
include 'app.php';
?>
<?getHeader()?>
<?//getMenu()?>
<body>
    <nav class="pui-nav primary">
        <div class="inner">
            <div class="title">
                مکان های دیدنی
            </div>
        </div>
    </nav>
    <div class="space-60"></div>
<div class="container">
    <div class="row">
    <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
    <div class="chip" id="about" role="presentation">
        <h1 class="center-align">مکان های دیدنی</h1>
        <hr>
    <div class="presentation">
        <?php
        $getWonderful = mysqli_query($db,"SELECT * FROM `Wonderful_Places` WHERE `active`=1");
        if (!mysqli_num_rows($getWonderful) >= 1) {
            echo "<p class='center-align red-txt'>هیچ مکان دیدنی ای پیدا نشد :(</p>";
        }
        else {
            while ($Wonderful = mysqli_fetch_assoc($getWonderful)) {
                $State = getState($Wonderful['fstate'],"name");
                echo "<div class='chip'>
<h3>$Wonderful[name]</h3>
<br>
$Wonderful[description]
<br>
<label class='lbl blue'>$State</label>
</div>";
            }
        }
        ?>
    </div>
</div>
</div>
</div>
</div>
<?setTitle("مکان های دیدنی")?>
<?getFooter()?>