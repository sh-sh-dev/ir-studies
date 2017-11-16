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
                            <h1 class="center-align">امکانات محصول</h1>
                            <p>لیست استان های ایران</p>
                            <p>توضیحات استان ها</p>
                            <p>مشاهیر استان ها</p>
                            <p>مکان های دیدنی استان ها</p>
                            <p>شهر های مهم استان ها</p>
                            <p>سوغاتی های استان ها</p>
                            <p>جمعیت استان ها</p>
                            <p>تصاویر استان ها</p>
                            <p>مرکزشهر استان ها</p>
                        </div>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </div>
    <?getButtons()?>
</div>
<?=setTitle("امکانات محصول", 1)?>
<?getFooter()?>
