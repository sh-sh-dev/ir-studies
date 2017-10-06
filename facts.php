<?php
include 'app.php';
?>
<?getHeader()?>
<?//getMenu()?>
<body id="_facts">
    <div class="ui">
        <div class="header-box">
            <nav class="pui-nav primary">
                <div class="inner">
                    <div class="title">
                        عجایب ایران
                        <small style="opacity: .7; font-weight: normal">نکاتی که هرگز نمی دانستید!</small>
                    </div>
                </div>
            </nav>
        </div>
        <div class="facts-container">
            <div class="fs-box">
                <button class="btn fab material-icons primary" data-fs-target='next'
                data-tooltip='آیتم بعد' data-tooltip-place='left'>keyboard_arrow_right</button>
                <div class="fs">
                    <div class="fs-indicators"></div>
                    <div class="fs-item active">
                        <i class="material-icons">flash_on</i>
                        <h5><i class="material-icons red-txt">location_on</i> اندیمشک</h5>
                        <p>
                            تنها شهر دارای سه سد جهانی در ایران
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">traffic</i>
                        <h5><i class="material-icons red-txt">location_on</i> پاوه</h5>
                        <p>
                            شهری بدون حتی یک چراغ قرمز!
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">ac_unit</i>
                        <h5><i class="material-icons red-txt">location_on</i> چالدران</h5>
                        <p>
                            شهر بدون کولر!
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">monetization_on</i>
                        <h5><i class="material-icons red-txt">location_on</i> اردکان</h5>
                        <p>
                            پولدارترین و مرفه ترین شهر ایران
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">security</i>
                        <h5><i class="material-icons red-txt">location_on</i> فردوس</h5>
                        <p>
                            امن ترین شهر ایران و دومین شهر جهان!
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">money_off</i>
                        <h5><i class="material-icons red-txt">location_on</i> تبریز</h5>
                        <p>
                            شهر بدون گدا
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">school</i>
                        <h5><i class="material-icons red-txt">location_on</i> نورآباد ممسنی</h5>
                        <p>
                            شهری که 18% جمعیتش دانشجو است!
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">insert_emoticon</i>
                        <h5><i class="material-icons red-txt">location_on</i> بروجرد</h5>
                        <p>
                            خوشگذران ترین مردم ایران!
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">motorcycle</i>
                        <h5><i class="material-icons red-txt">location_on</i> کیش</h5>
                        <p>
                            شهر بدون موتورسیکلت!
                        </p>
                    </div>
                    <div class="fs-item">
                        <i class="material-icons">hotel</i>
                        <h5><i class="material-icons red-txt">location_on</i> شادگان</h5>
                        <p>
                            شهر بدون هتل و مسافر خانه!
                        </p>
                    </div>
                    <!-- <div class="fs-item">
                        <i class="material-icons"></i>
                        <h5><i class="material-icons red-txt">location_on</i></h5>
                        <p>

                        </p>
                    </div> -->
                </div>
                <button class="btn fab material-icons primary" data-fs-target='prev'
                data-tooltip='آیتم قبل' data-tooltip-place='right'>keyboard_arrow_left</button>
            </div>
        </div>
    </div>
    <button class="btn fab lg material-icons secondary" data-modal-target='#help' style="position: fixed;
    z-index: 1000; bottom: 25px; left: 25px" data-tooltip='راهنمایی' data-tooltip-place='right'
    data-ripple-color='#000' id='help-handle'>help</button>
    <div class="pui-modal" id="help">
        <div class="inner">
            <div class="header">
                <div class="modal-title">
                    راهنمایی
                </div>
                <button class="close modal-close material-icons">close</button>
            </div>
            <div class="body">
                در این صفحه، مواردی از عجایب ایران به نمایش درآورده می شود که نکاتی جالب به همراه دارند.<br>
                برای حرکت میان آیتم های مختلف، می توانید از دکمه های گرد کنار صفحه و یا کلید های کیبورد که در پایین به آنها اشاره شده، استفاده نمایید:<br>
                <ul>
                    <li><b>فلش راست:</b> آیتم بعد</li>
                    <li><b>فلش چپ:</b> آیتم قبل</li>
                    <li><code>home</code>: آیتم اول</li>
                    <li><code>end</code>: آیتم آخر</li>
                    <li><bdi><code>Ctrl + Alt + [n]</code></bdi>: حرکت به آیتم nـُم
                    <span class="muted-txt">(مثال: <code>Ctrl + Alt + 5</code> برای نمایش آیتم پنجم)</span>
                    </li>
                </ul>
                برای دسترسی به قسمت راهنمایی می توانید از کلید های <code>Ctrl + Alt + h</code> استفاده کنید.
            </div>
            <div class="footer">
                <button class="btn sm secondary simple modal-close">متوجه شدم</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).on('keyup', function (e) {
            e.which == 72 && e.ctrlKey && e.altKey ? $('#help-handle').trigger('click') : void 0
        })
    </script>
    <?=setTitle("عجایب ایران")?>
<?getFooter()?>