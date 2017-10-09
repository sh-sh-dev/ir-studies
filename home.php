<?php
include 'app.php';
?>
<?getHeader()?>
<body onload="DataList()">
    <div class="ui">
        <div class="header-box">
            <?getMenu()?>
        </div>
        <div class="box-container">
            <div class="home-header" data-crr-color='#333'>
                <div class="content">
                    <h1>ایران شناسی</h1>
                </div>
                <button class="btn primary fab lg material-icons" style="position: absolute;
                left: 50px; bottom: -45px; z-index: 7" data-tooltip='مشاهده لیست استان ها' data-tooltip-place='right'
                data-modal-target='#states_list' data-tooltip-container='#list-control' id="list-control">list</button>
            </div>
            <div class="space-40"></div>
            <main role="main">
                <div class="container">
                    <!-- <ul class="home-links">
                        <li><a href="facts" target="_blank">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
                        </a></li>
                        <li><a href="history" target="_blank">
                            <i class="material-icons">change_history</i>
                            <span>تاریخ ایران</span>
                        </a></li>
                        <li><a href="facts" target="_blank">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
                        </a></li>
                            <li><a href="wonderful" target="_blank">
                                <i class="material-icons">nature</i>
                                <span>مکان های دیدنی</span>
                            </a></li>
                            <li><a href="pics" target="_blank">
                                <i class="material-icons">photo_library</i>
                                <span>تصاویر</span>
                            </a></li>
                            <li><a href="about" target="_blank">
                                <i class="material-icons">info_outline</i>
                                <span>شناسنامه محصول</span>
                            </a></li>
                        </ul> -->
                        <div class="features">
                            <div class="pui-col xs-12 md-4">
                                <i class="material-icons">description</i>
                                <h5>اطلاعات کامل</h5>
                                <p>
                                    در این پروژه، ما برای هر استان از کشور، اطلاعاتی کامل و دقیق از قبیل جمعیت، مشاهیر، و توضیحاتی کامل و در عین حال مختصر
                                    فراهم کرده ایم تا محتوای کاملی را به شما ارائه کنیم.<br>
                                    <button class="btn secondary sm" onclick="$('#list-control').trigger('click')"><i class="material-icons">open_in_new</i> لیست استان ها</button>
                                </p>
                            </div>
                            <div class="pui-col xs-12 md-4">
                                <i class="material-icons">assistant</i>
                                <h5>مطالب جالب</h5>
                                <p>
                                    عجایب ایران، خلاصه ای از تاریخ کشور و همچنین گلچین تصاویر از مکان های دیدنی نیز در قالب صفحاتی مجزا در دسترس شما هستند. شاید برخی نکات را برای اولین بار  خواهید دانست!
                                </p>
                            </div>
                            <div class="pui-col xs-12 md-4">
                                <i class="material-icons">wc</i>
                                <h5>سفیـد</h5>
                                <p>
                                    سفیــــــــــــــــــــــــــــــــــــــــــــد!<br>
                                    <button class="btn white sm">من سفیدم!</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="pui-modal" id="states_list">
            <div class="inner">
                <div class="header">
                    <span class="modal-title">لیست استان ها</span>
                    <button class="close modal-close material-icons">close</button>
                </div>
                <div class="body">
                    <ul class="unstyled states-list">
                        <?php
                        $getStates = mysqli_query($db,"SELECT * FROM `States`  WHERE `active`=1");
                        if (mysqli_num_rows($getStates) >= 1) {
                            while ($State = mysqli_fetch_assoc($getStates)) {
                                echo "<li id='state-link-$State[n]'><i class='material-icons'>keyboard_arrow_left</i> <a class='link' target='_blank' href='article?state=$State[english]'>$State[name]</a></li>";
                            }
                        }
                        else {
                            echo '<p class="center-align red-txt">هیچ استانی پیدا نشد :(</p>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="footer">
                    <button class="btn primary simple modal-close">بستن</button>
                </div>
            </div>
        </div>
        <!-- <div class="container">
        <div class="row">
        <div class="space-80"></div>
        <div class="pui-col xs-12 center-align">
        <h3><?//=getSetting('title')?></h3>
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
</div> -->
<script type="text/javascript">
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
<?=setTitle("خانه", 1)?>
<?getFooter()?>
<script src="assets/crispRipple.js"></script>
