<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="pui-col md-6">
    <div class="chip">
    <h3 class="center-align">استان های بدون توضیحات</h3>
    <?php
    $query = mysqli_query($db,"SELECT * FROM `States` WHERE `description` = ''");
    if (mysqli_num_rows($query) > 0) {
        $odd = "";
        $even = "";
        $n = 0;
        while ($nf = mysqli_fetch_assoc($query)) {
            $n++;
            if ($n % 2 == 0) {
                $even .= "$nf[name]<br>";
            }
            else {
                $odd .= "$nf[name]<br>";;
            }
        }
        echo "<div class='pui-col md-6'>";
        echo $odd;
        echo "</div>";
        echo "<div class='pui-col md-6'>";
        echo $even;
        echo "</div>";
    }
    else {
        echo 'همه استان ها توضیحات دارند :)';
    }
    ?>
    </div>
</div>
    <div class="pui-col md-6">
        <div class="chip">
        <h3 class="center-align">استان های بدون جمله قهرامانانه</h3>
        <?php
        $query = mysqli_query($db,"SELECT * FROM `States` WHERE `ins_sentense` = ''");
        if (mysqli_num_rows($query) > 0) {
            $odd = "";
            $even = "";
            $n = 0;
            while ($nf = mysqli_fetch_assoc($query)) {
                $n++;
                if ($n % 2 == 0) {
                    $even .= "$nf[name]<br>";
                }
                else {
                    $odd .= "$nf[name]<br>";;
                }
            }
            echo "<div class='pui-col md-6'>";
            echo $odd;
            echo "</div>";
            echo "<div class='pui-col md-6'>";
            echo $even;
            echo "</div>";
        }
        else {
            echo 'همه استان ها جمله قهرمانانه دارند :)';
        }
        ?>
        </div>
    </div>
<?=setTitle("استان های پوچ",1)?>
<?getFooter()?>