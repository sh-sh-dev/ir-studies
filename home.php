<?php
include 'app.php';
?>
<?getHeader()?>
<body>
    <div class="ui">
        <div class="header-box">
            <?getMenu()?>
        </div>
        <div class="box-container">
            <div class="has-crr home-header" data-crr-color='#009688|#263238'>
                <div class="content">
                    <h1>ایران شناسی</h1>
                </div>
                <button class="btn white fab material-icons lg" style="position: absolute;
                left: 60px; bottom: -37.5px; z-index: 7; margin: 0" data-tooltip='مشاهده لیست استان ها' data-tooltip-place='right'
                data-modal-target='#states_list' data-tooltip-container='#list-control' id="list-control">list</button>
            </div>
            <div class="space-40"></div>
            <main role="main">
                <div class="container">
                    <div class="features">
                        <div class="pui-col xs-12 md-3">
                            <i class="material-icons">description</i>
                            <h5>اطلاعات کامل</h5>
                            <p>
                                در این پروژه، ما برای هر استان از کشور، اطلاعاتی کامل و دقیق از قبیل جمعیت، مشاهیر، و توضیحاتی کامل و در عین حال مختصر
                                فراهم کرده ایم تا محتوای کاملی را به شما ارائه کنیم.<br>
                                <button class="btn simple primary sm" onclick="$('#list-control').trigger('click')"><i class="material-icons">open_in_new</i> لیست استان ها</button>
                            </p>
                        </div>
                        <div class="pui-col xs-12 md-3">
                            <i class="material-icons">assistant</i>
                            <h5>مطالب جالب ایران</h5>
                            <p>
                                عجایب ایران، خلاصه ای از تاریخ کشور و همچنین گلچین تصاویر از مکان های دیدنی نیز در قالب صفحاتی مجزا در دسترس شما هستند. شاید برخی نکات را برای اولین بار  خواهید دانست!
                                <br>
                                <button class="btn simple primary sm" onclick="location.href = 'facts'"><i class="material-icons">open_in_new</i> مطالب جالب ایران</button>
                            </p>
                        </div>
                        <div class="pui-col xs-12 md-3">
                            <i class="material-icons">nature</i>
                            <h5>مکان های دیدنی ایران</h5>
                            <p>
                                مکان های دیدنی ایران، همه و همه در دسترس شما هستند. از عجایب طبیعی تا مکان های زیارتی و تفریحی.
                                <br>
                                <button class="btn simple primary sm" onclick="location.href = 'wonderful'"><i class="material-icons">open_in_new</i> مکان های دیدنی ایران</button>
                            </p>
                        </div>
                        <div class="pui-col xs-12 md-3">
                            <i class="material-icons">history</i>
                            <h5>تاریخچه ایران</h5>
                            <p>
                                خلاصه ای اتفاقات بزرگ در تاریخ ایران، از تشکیل تا فروپاشی حکومت ها و ... را در اینجا ببینید.
                                <br>
                                <button class="btn simple primary sm" onclick="location.href = 'history'"><i class="material-icons">open_in_new</i> تاریخچه ایران</button>
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="pui-modal" id="states_list">
        <div class="inner" style="height: calc(92vh - 50px); max-height: none">
            <div class="header">
                <span class="modal-title">لیست استان ها</span>
                <button class="close modal-close material-icons">close</button>
            </div>
            <div class="body" style='overflow: overlay'>
                <div class="pui-input"
                style="max-width: 300px; width: 95%; margin-right: auto; margin-left: auto">
                    <input type="text" placeholder="جستجو کنید..." id='states-filter'>
                </div>
                <br><br>
                <ul class="unstyled states-list">
                    <?php
                    $getStates = mysqli_query($db,"SELECT * FROM `States`  WHERE `active`=1");
                    if (mysqli_num_rows($getStates) >= 1) {
                        while ($State = mysqli_fetch_assoc($getStates)) {
                            echo "<li id='state-link-$State[n]'><i class='material-icons'>keyboard_arrow_left</i> <a class='link elide-text' target='_blank' href='article?state=$State[english]'>$State[name]</a></li>";
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
<?=setTitle("خانه", 1)?>
<script src="assets/crispRipple.min.js"></script>
<?getFooter()?>
