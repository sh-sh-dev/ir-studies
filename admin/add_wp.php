<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن مکان دیدنی</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='wp' placeholder="مکان دیدنی" required>
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
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت مکان دیدنی</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $description = $_POST["description"];
            $description = str_replace(PHP_EOL,"<br>",$description);
            $fstate = $_POST["fstate"];
            $wp = $_POST["wp"];
            $StateName = getState($fstate,"name");
            $addWP = mysqli_query($db,"INSERT INTO `Wonderful_Places` (`name`,`description`,`fstate`) VALUES ('$wp','$description','$fstate')");
            if ($addWP) {
                echo "<div class='chip'>مکان دیدنی استان $StateName
،
 <b>$wp</b>
 اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
<?=setTitle("اضافه کردن مکان دیدنی",1)?>
<?getFooter()?>
