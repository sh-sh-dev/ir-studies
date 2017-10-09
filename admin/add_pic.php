<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body onload="DataList()">
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن عکس</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='description' placeholder="موضوع" required>
            </div>
            <div class="pui-input">
<!--                <div class="pui-datalist">-->
<!--                    <input type="text" name='fstate' id="s" placeholder="برای استان" required list="states">-->
<!--                </div>-->
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
            <div class="pui-input">
                <input type="file" name='UploadedFile' placeholder="عکس" required>
            </div>
        </div>
        <div class="cf"></div>
        <div style="margin: 0 auto" class="center-align">
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت عکس</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $description = $_POST["description"];
            $description = str_replace(PHP_EOL,"<br>",$description);
            $fstate = $_POST["fstate"];
            $file = $_POST["file"];
            $url = null;
            $file_name = $_FILES['UploadedFile']['name'] ;
            $format= '.' . end(explode('.',$file_name ));
            $State = getState($fstate,"english");
            $StateName = getState($fstate,"name");
            $fileName = $State . '-' . $file_name . rand(99,999) . $format;
            $target_path = "../assets/images/" . $fileName ;
            $target_path_wm = "../assets/images/wm-" . $fileName ;
            if(move_uploaded_file($_FILES['UploadedFile']['tmp_name'], $target_path)) {
                $url = getSetting('url') . '/' . str_replace('../','',$target_path) ;
                $ok = 1;
            }
            else {
                $ok = 0;
            }
            include '../assets/php/watermark/WideImage/WideImage.php';
            $image = WideImage::load($target_path);
//            $watermark = WideImage::load("../assets/images/watermark.png");
            $watermark = WideImage::load("../assets/images/watermark.jpg");
            $new = $image->merge($watermark,  'center', 'bottom', 50);
            $new->saveToFile($target_path);
            $addPic = mysqli_query($db,"INSERT INTO `Pics` (`url`,`fstate`,`description`) VALUES ('$url','$fstate','$description')");
            if ($addPic && $ok) {
                echo "<div class='chip'>تصویر استان $StateName اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
<script>
    function DataList() {
        <?php
        $query = mysqli_query($db,"SELECT `name` FROM `States` WHERE `active`=1");
        $json = array();
        while ($States = mysqli_fetch_assoc($query)) {
            array_push($json,$States["name"]);
        }
        $json = json_encode($json);
        ?>
        $('#s').dataList(
            <?=$json?>
        )
    }
</script>
<?=setTitle("اضافه کردن عکس",1)?>
<?getFooter()?>
