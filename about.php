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
            <div class="space-60"></div>
            <div class="container">
                <div class="row">
                    <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
                        <div class="chip" id="about" role="presentation" style="margin: 0">
                            <div class="presentation">
                                <h1 class="center-align">شناسنامه محصول</h1>
                                <h4><b>مشخصات محصول</b></h4>
                                <span>عنوان محصول</span>
                                <b>ایران شناسی</b>
                                <br>
                                <span>بخش مسابقه</span>
                                <b>درس افزار های آموزشی متناسب با موضوعات کتاب&zwnj;های درسی</b>
                                <br>
                                <span>محیط اجرا</span>
                                <b>وب (Web)</b>
<!--                                <br>-->
<!--                                <span>کد لایسنس فونت ایران سنس</span>-->
<!--                                <b>EK7P2</b>-->
                                <h4><b>مشخصات فردی</b></h4>
                                <span>سازندگان</span>
                                <b>شایگان شکرالهی و حسین خوانساری</b>
                                <br>
                                <span>دبیر</span>
                                <b>جناب آقای حیدری</b>
                                <br>
                                <span>نام آموزشگاه</span>
                                <b>دبیرستان نمونه دولتی اسوه - منطقه 9</b>
                                <br>
                                <span>دوره تحصیلی</span>
                                <b>متوسطه اول - کلاس هشتم</b>
                                <br>
                                <span>زمان ساخت</span>
                                <b>6 مهر 1396</b>
                            </div>
                        </div>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
        </div>
        <?getButtons()?>
    </div>
<?=setTitle("شناسنامه محصول", 1)?>
<?getFooter()?>
