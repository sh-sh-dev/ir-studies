<?php
include 'app.php';
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=getSetting('title')?></title>
    <meta name="theme-color" content="#aeea00">
    <meta name="msapplication-navbutton-color" content="#aeea00">
    <meta name="apple-mobile-web-app-status-bar-style" content="#aeea00">
    <link rel="stylesheet" href="assets/demo.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="space-80"></div>
            <div class="pui-col xs-12 center-align">
                <h3><?=getSetting('title')?></h3>
                <div style="max-width: 280px; width: 100%; margin: 0 auto">
                    <form action="" method="post">
                        <div class="pui-datalist">
                            <div class="pui-input">
                                <input type="text" id="s" name="state_search" placeholder="استان مورد نظر خود را جستجو کنید...">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="space-80"></div>
        </div>
    </div>
</body>
<script src="assets/dist/jquery-3.1.1.min.js"></script>
<script src="assets/dist/pui.min.js"></script>
<script src="assets/demo.min.js"></script>
<script type="text/javascript">
    <?php
    $query = mysqli_query($db,"SELECT `name` FROM `States`");
    $json = array();
    while ($States = mysqli_fetch_assoc($query)) {
        array_push($json,$States["name"]);
    }
    $json = json_encode($json);
    ?>
    $('#s').dataList(
        <?=$json?>
    )
</script>
</html>
