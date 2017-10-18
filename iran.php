<?php
include 'app.php';
?>
<?getHeader()?>
<body>
    <div class="ui">
        <div class="header-box">
            <?php getMenu() ?>
        </div>
        <div class="box-container">
            <div class="audio-player">
                <audio id='au'>
                    <source src="assets/dist/anthem.mp3">
                </audio>
                <div class="controls">
                    <div class="slider big-slider"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<?=setTitle('ایران', 1)?>
<?getFooter(); ?>
