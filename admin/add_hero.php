<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن قهرمان</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='hero_name' placeholder="نام قهرمان" required>
            </div>
            <div class="pui-textarea">
                <textarea name='description' placeholder="توضیحات" required rows="8"></textarea>
            </div>
            <div class="pui-input">
                <input type="text" name='fstate' id="s" placeholder="برای استان" required list="states">
                <datalist id="states">
                    <?php
                    $query = mysqli_query($db,"SELECT * FROM `States` WHERE `active`=1");
                    $json = array();
                    while ($States = mysqli_fetch_assoc($query)) {
                        echo "<option value='$States[n]'>$States[name]</option>";
                        array_push($json,$States["name"]);
                    }
                    ?>
                </datalist>
            </div>
        </div>
        <div class="cf"></div>
        <div style="margin: 0 auto" class="center-align">
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت قهرمان</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $description = $_POST["description"];
            $description = str_replace(PHP_EOL,"<br>",$description);
            $fstate = $_POST["fstate"];
            $hero = $_POST["hero_name"];
            $StateName = getState($fstate,"name");
            $addHero = mysqli_query($db,"INSERT INTO `Heroes` (`name`,`description`,`fstate`) VALUES ('$hero','$description','$fstate')");
            if ($addHero) {
                echo "<div class='chip'>قهرمان استان $StateName
،
 <b>$hero</b>
 اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
<?=setTitle("اضافه کردن قهرمان",1)?>
<?getFooter()?>
