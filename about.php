<?php
include 'app.php';
?>
<?getHeader()?>
<body>
    <!-- <nav class="pui-nav primary">
        <div class="inner">
            <div class="title">
                درباره این پروژه
            </div>
        </div>
    </nav> -->
    <div class="ui">
        <div class="header-box">
            <?getMenu()?>
        </div>
        <div class="box-container">
            <div class="space-60"></div>
            <div class="container">
                <div class="row">
                    <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
                        <div class="chip" id="about" role="presentation">
                            <div class="presentation">
                                <h1>شناسنامه محصول</h1>
                                <h4><b>مشخصات محصول</b></h4>
                                <span>عنوان محصول</span>
                                <b>ایران شناسی</b>
                                <br>
                                <span>بخش مسابقه</span>
                                <b>درس افزار های آمورزشی متناسب با موضوعات کتاب های درسی</b>
                                <br>
                                <span>سیستم عامل</span>
                                <b>Web</b>
                                <h4><b>مشخصات فردی</b></h4>
                                <span>سازندگان</span>
                                <b>شایگان شکرالهی و حسین خوانساری</b>
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
                            <!-- <h5>ابزار های استفاده شده در این محصول</h5>
                            رابط کاربری توسعه یافته توسط <a href="https://github.com/piorra/pui">PUI</a> -->
                        </div>
                        <div class="space-80"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=setTitle("درباره ما", 1)?>
<?getFooter()?>
