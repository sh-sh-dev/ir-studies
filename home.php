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
            <div class="home-header" data-crr-color='#3f51b5'>
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
                    <ul class="home-links">
                        <li><a href="facts" target="_blank">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
                        </a></li>
                        <li><a href="history" target="_blank">
                            <i class="material-icons">change_history</i>
                            <span>تاریخ ایران</span>
                        </a></li>
<<<<<<< HEAD
                        <li><a href="facts" target="_blank">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
                        </a></li>
                        <li><a href="facts" target="_blank">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
=======
                        <li><a href="wonderful" target="_blank" class="has-ripple">
                            <i class="material-icons">nature</i>
                            <span>مکان های دیدنی</span>
                        </a></li>
                        <li><a href="pics" target="_blank" class="has-ripple">
                            <i class="material-icons">camera_alt</i>
                            <span>تصاویر</span>
>>>>>>> 066febb463d54f3cad866aa1db24eaa831dc18b9
                        </a></li>
                        <li><a href="about" target="_blank" class="has-ripple">
                                <i class="material-icons">people</i>
                                <span>شناسنامه محصول</span>
                            </a></li>
                    </ul>
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
