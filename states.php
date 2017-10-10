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
                                echo "<div class='part'>
                                <h3>$State[name]</h3>
                                <p class='yellow-txt'>$State[ins_sentense]</p>
                                <p>$State[description]</p>
                                <br>
                                <label data-tooltip='$State[Population] نفر' class='lbl primary' style='float: left'><i class='material-icons'>people</i>  $Population نفر</label>
                                <a class='btn blue sm' href='article?state=$State[english]'>نمایش</a>
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
<?=setTitle("لیست استان ها",1)?>
<?getFooter()?>