<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
    <h3 class="center-align">استان های بدون توضیحات</h3>
<main role="main">
<div class="timeline">
    <div class="line"></div>
    <?php
    $query = mysqli_query($db,"SELECT * FROM `States` WHERE `description` = ''");
    if (mysqli_num_rows($query) > 0) {
        while ($nf = mysqli_fetch_assoc($query)) {
            echo "<div class='item'><div class='inner'>";
            echo "$nf[name]";
            echo "</div></div>";
        }
    }
    else {
        echo 'همه استان ها توضیحات دارند :)';
    }
    ?>
    </div>
</main>
            <h3 class="center-align">استان های بدون جمله قهرامانانه</h3>
<main role="main">
    <div class="timeline">
    <div class="line"></div>
<?php
$query = mysqli_query($db,"SELECT * FROM `States` WHERE `ins_sentense` = ''");
if (mysqli_num_rows($query) > 0) {
    while ($nf = mysqli_fetch_assoc($query)) {
        echo "<div class='item'><div class='inner'>";
        echo "$nf[name]";
        echo "</div></div>";
    }
}
else {
    echo 'همه استان ها جمله قهرمانانه دارند :)';
}
?>
    </div>
</main>
<?=setTitle("استان های پوچ",1)?>
<?getFooter()?>