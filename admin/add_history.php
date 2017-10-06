<?php
include '../app.php';
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/demo.css">
</head>
<body>
<div class="center-align container">
    <h1 style="font-weight: 200">اضافه کردن تاریخچه</h1>
    <form action="" method="post">
        <div style="max-width: 300px; width: 100%; margin:0 auto">
            <div class="pui-input">
                <input type="text" name='title' placeholder="موضوع" required>
            </div>
            <div class="pui-input">
                <input type="date" name='date' placeholder="تاریخ">
            </div>
        </div>
                    <div class="pui-textarea pui-col xs-12 md-8 md-offset-2">
                        <textarea name="description" rows="8" cols="80" placeholder="توضیحات"></textarea>
                    </div>
        <div class="cf"></div>
        <div style="margin: 0 auto" class="center-align">
            <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت تاریخچه</button>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $date = $_POST["date"];
            $description = $_POST["description"];
            $addState = mysqli_query($db,"INSERT INTO `History` (`title`,`date`,`description`) VALUES ('$title','$date','$description')");
            if ($addState) {
                echo "<div class='chip'>$title اضافه شد</div>";
            }
            else {
                echo '<div class="chip">موفقیت آمیز نبود :(</div>';
            }
        }
        ?>
    </form>
</div>
</body>
<script src="../assets/dist/jquery.min.js"></script>
<script src="../assets/dist/pui.min.js"></script>
</html>
