<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن سوغاتی</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='souvenir_name' placeholder="نام سوغاتی" required>
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
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت سوغاتی</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $fstate = $_POST["fstate"];
            $souvenir = $_POST["souvenir_name"];
            $StateName = getState($fstate,"name");
            $addSouvenir = mysqli_query($db,"INSERT INTO `Souvenir` (`name`,`fstate`) VALUES ('$souvenir','$fstate')");
            if ($addSouvenir) {
                echo "<div class='chip'>سوغاتی استان $StateName
،
 <b>$souvenir</b>
 اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
<?=setTitle("اضافه کردن سوغاتی",1)?>
<?getFooter()?>
