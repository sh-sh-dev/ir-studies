<?php
include 'app.php';
?>
<?getHeader()?>
<body id="_facts">
    <div class="ui">
        <div class="header-box">
            <?getMenu()?>
        </div>
        <div class="box-container">
            <div class="fs-box">
                <button class="btn fab material-icons secondary" data-fs-target='next'
                data-tooltip='آیتم بعد' data-tooltip-place='left'
                data-tooltip-container='[data-fs-target=next]'>keyboard_arrow_right</button>
                <div class="fs">
                    <div class="fs-indicators"></div>
                    <?php
                    $getFacts = mysqli_query($db,"SELECT * FROM `Facts` WHERE `active`=1");
                    if (!mysqli_num_rows($getFacts) >= 1) {
                        echo "<p class='center-align red-txt'>هیچ چیزی برای نمایش وجود ندارد :(</p>";
                    }
                    $n = 0;
                    while ($Facts = mysqli_fetch_assoc($getFacts)) {
                        if ($n == 0) {
                            echo "<div class=\"fs-item active\">";
                        }
                        else {
                            echo "<div class=\"fs-item\">";
                        }
                        echo "<i class=\"material-icons\">$Facts[icon]</i>";
                        echo "<h5><i class=\"material-icons red-txt\">
                        location_on</i>$Facts[location]</h5>";
                        echo "<p>$Facts[description]</p>";
                        echo "</div>";
                        $n++;
                    }
                    ?>
                </div>
                <button class="btn fab material-icons secondary" data-fs-target='prev'
                data-tooltip='آیتم قبل' data-tooltip-place='right'
                data-tooltip-container='[data-fs-target=prev]'>keyboard_arrow_left</button>
            </div>
        </div>
    </div>
    <!-- <button class="btn fab lg material-icons" data-modal-target='#help' style="position: fixed;
    z-index: 1000; bottom: 25px; left: 25px; background-color: #333" data-tooltip='راهنمایی' data-tooltip-place='right' id='help-handle'>help</button>
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
                    <li><bdi><code>Ctrl + Alt + [n]</code></bdi>: حرکت به آیتم nـُم (اعداد از صفر شروع می شوند!)
                    <span class="muted-txt">(مثال: <code>Ctrl + Alt + 6</code> برای نمایش آیتم پنجم)</span>
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
    </script> -->
    <?=setTitle("عجایب ایران",1)?>
<?getFooter()?>
