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
        <h1 style="font-weight: 200">اضافه کردن استان</h1>
        <form action="" method="post">
            <div style="max-width: 300px; width: 100%; margin:0 auto">
                <div class="pui-input">
                    <input type="text" name='name' placeholder="نام استان">
                </div>
                <div class="pui-input">
                    <input type="text" name='english' style="direction: ltr" placeholder="فینگیلیش...">
                </div>
<!--                <div class="pui-input">-->
<!--                    <input type="text" name='ins_sentense' placeholder="جمله قهرمانانه">-->
<!--                </div>-->
<!--                <div class="pui-input">-->
<!--                    <input type="number" min="0" name='population' placeholder="جمعیت">-->
<!--                </div>-->
<!--                <div class="pui-input">-->
<!--                    <input type="text" name='city_center' placeholder="مرکز استان">-->
<!--                </div>-->
            </div>
<!--            <div class="pui-textarea pui-col xs-12 md-8 md-offset-2">-->
<!--                <textarea name="description" rows="8" cols="80" placeholder="پاراگراف..."></textarea>-->
<!--            </div>-->
            <div class="cf"></div>
            <div style="margin: 0 auto" class="center-align">
                <button type="submit" name="submit" class="btn secondary lg"><i class="material-icons">done</i> ثبت استان</button>
            </div>
            <?php
            if (isset($_POST["submit"])) {
                $name = $_POST["name"];
                $english = $_POST["english"];
                $ins_sentense = $_POST["ins_sentense"];
                $population = $_POST["population"];
                $city_center = $_POST["city_center"];
                $description = $_POST["description"];
//                $addState = mysqli_query($db,"INSERT INTO `States` (`name`,city_center,Population,ins_sentense,description) VALUES ('$name','$city_center',$population,'$ins_sentense','$description')");
                $addState = mysqli_query($db,"INSERT INTO `States` (`name`,`english`) VALUES ('$name','$english')");
                if ($addState) {
                    echo "<div class='chip'>$name اضافه شد</div>";
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
