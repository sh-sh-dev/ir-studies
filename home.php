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
                    <!-- <div class="pui-col xs-12 md-9 lg-7">
                        <div class="chip">

                        </div>
                    </div>
                    <div class="pui-col xs-12 md-3 lg-5">
                        <div class="chip sm center-align">
                            <h5><i class="material-icons primary-txt">access_time</i> ساعت</h5>
                            <div style="font-size: 2em">18:54:23</div>
                            <h5><i class="material-icons primary-txt">date_range</i> تاریخ (هجری شمسی)</h5>
                            <div style="font-size: 2em">10/8/2017</div>
                        </div>
                    </div> -->
                    <ul class="home-links">
                        <li><a href="facts" target="_blank" class="has-ripple">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
                        </a></li>
                        <li><a href="history" target="_blank" class="has-ripple">
                            <i class="material-icons">change_history</i>
                            <span>تاریخ ایران</span>
                        </a></li>
                        <li><a href="facts" target="_blank" class="has-ripple">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
                        </a></li>
                        <li><a href="facts" target="_blank" class="has-ripple">
                            <i class="material-icons">assistant</i>
                            <span>عجایب</span>
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
