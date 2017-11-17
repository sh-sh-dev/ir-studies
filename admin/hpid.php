<?php
include '../app.php';
?>
<?getHeader()?>
<?getMenu()?>
<body>
<div class="pui-col md-12">
    <div class="chip">
        <h3 class="center-align">استان های دارای جمعیت در توضیحات</h3>
        <?php
        $query = mysqli_query($db,"SELECT * FROM `States` WHERE `description` LIKE '%جمعیت%'");
        if (mysqli_num_rows($query) >= 1) {
            while ($hpid = mysqli_fetch_assoc($query)) {
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
        }
        else {
            echo 'همه استان ها سالم هستند :)';
        }
        ?>
    </div>
</div>
<?=setTitle("استان های دارای جمعیت در توضیحات",1)?>
<?getFooter()?>