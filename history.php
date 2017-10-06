<?php
include 'app.php';
?>
<?getHeader()?>
<?//getMenu()?>
<body>
    <div class="ui">
        <div class="header-box">
            <nav class="pui-nav primary">
                <div class="inner">
                    <div class="title">
                        تاریخ ایران
                    </div>
                </div>
            </nav>
        </div>
        <div class="facts-container">
            <main role="main">
                <div class="timeline">
                    <?
                    $getHistory = mysqli_query($db,"SELECT * FROM `History` WHERE `active`=1");
                    if (mysqli_num_rows($getHistory) >= 1) {
                        echo "<div class='line'></div>";
                    }
                    else {
                        echo "<p class='center-align red-txt'>هیچ چیزی برای نمایش وجود ندارد :(</p>";
                    }
                    while ($History = mysqli_fetch_assoc($getHistory)) {
                        echo "<div class='item'>
                        <div class='inner'>";
                        echo "<h5>$History[title]</h5>";
                        echo "<p>$History[description]</p>";
                        echo "<footer><label class='lbl primary'>$History[date]</label></footer>";
                        echo " </div>
                    </div>";
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>
<?=setTitle("خلاصه ای از تاریخ ایران")?>
<?getFooter()?>
