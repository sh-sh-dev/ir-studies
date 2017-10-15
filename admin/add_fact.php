<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن مکان های عجیب</h1>
    <form action="" method="post">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='location' placeholder="مکان" required>
            </div>
            <div class="input-table">
                <div class="pui-input">
                    <input type="text" autocomplete="off" name='icon' id="ico" onkeyup="$('#icon').text($('#ico').val())" placeholder="آیکون">
                </div>
                <div class="addon" style="font-size: 2em" >
                    <i class="material-icons input-addon" id="icon"></i>
                </div>
            </div>
        </div>
        <div class="pui-textarea pui-col xs-12 md-8 md-offset-2">
            <textarea name="description" rows="8" cols="80" placeholder="توضیحات"></textarea>
        </div>
        <div class="cf"></div>
        <div style="margin: 0 auto" class="center-align">
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت مکان عجیب</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $location = $_POST["location"];
            $icon = $_POST["icon"];
            $description = $_POST["description"];
            $description = str_replace(PHP_EOL,"<br>",$description);
            $addFact = mysqli_query($db,"INSERT INTO `Facts` (`location`,`icon`,`description`) VALUES ('$location','$icon','$description')");
            if ($addFact) {
                echo "<div class='chip'><b>$location</b> اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
<?=setTitle("اضافه کردن عجایب ایران",1)?>
<?getFooter()?>
