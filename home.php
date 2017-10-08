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
            <div class="home-header">
                <div class="content">
                    <h1>ایران شناسی</h1>
                </div>
                <button class="btn secondary fab lg material-icons" style="position: absolute;
                left: 50px; bottom: -45px; z-index: 7" data-tooltip='مشاهده لیست استان ها' data-tooltip-place='right'>list</button>
            </div>
            <main role="main">
                <div class="container">

                </div>
            </main>
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
