<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن توضیحات</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='ins_sentense' id="ins_sentense" placeholder="جمله قرمانانه" required value="<?php
                if (isset($_GET["state"]) && ValidState($_GET["state"])) {
                    echo getState($_GET["state"],"ins_sentense");
                }
                ?>">
            </div>
            <div class="pui-textarea">
                <textarea name='description' id="description" placeholder="توضیحات" required rows="8"><?php
                if (isset($_GET["state"]) && ValidState($_GET["state"])) {
                    echo getState($_GET["state"],"description");
                }
                    ?></textarea>
            </div>
            <div class="pui-input">
                <input type="text" name='fstate' id="s" placeholder="برای استان" required list="states" value="<?php
                if (isset($_GET["state"]) && ValidState($_GET["state"])) {
                    echo getState($_GET["state"],"n");
                }
                ?>">
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
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت توضیحات</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $description = $_POST["description"];
            $fstate = $_POST["fstate"];
            $ins_sentense = $_POST["ins_sentense"];
            $StateName = getState($fstate,"name");
            $addDescription = mysqli_query($db,"UPDATE `States` SET `description` = '$description' WHERE `n`='$fstate'");
            $addDescription1 = mysqli_query($db,"UPDATE `States` SET `ins_sentense` = '$ins_sentense' WHERE `n`='$fstate'");
            if ($addDescription && $addDescription1) {
                echo "<div class='chip'>توضیحات استان $StateName اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
<?php
if (isset($_GET["state"]) && ValidState($_GET["state"])) {
    $StateName = getState($_GET["state"],"name");
    ?>
<script>
    alert("ویرایش استان " + "<?=$StateName?>");
    </script>
<?php
}
?>
<?=setTitle("اضافه کردن توضیحات",1)?>
<?getFooter()?>
