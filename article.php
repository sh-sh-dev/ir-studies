<?php
if (empty($_GET["state"])) header('location:index.php');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مطلب سفید!</title>
    <meta name="theme-color" content="#aeea00">
    <link rel="stylesheet" href="assets/demo.css">
</head>
<body>
    <nav class="pui-nav fixed transparent" id="navigation" role="navigation">
        <div class="inner">
            <div class="sidenav-toggle">
                <button class="sidenav-control material-icons">menu</button>
            </div>
            <div class="title">
                استان سفید
            </div>
            <ul class="sidenav">
                <div class="sidenav-title">
                    ایران شناسی
                </div>
                <li><a href="index.html">
                    خانه
                </a></li>
            </ul>
            <div class="sidenav-overlay"></div>
        </div>
    </nav>
    <div class="heroic-header" style="background-image: url(assets/dist/img/test-bg.svg)">
        <div class="content">
            <h3>استان</h3>
            <span>یه جمله قهرمانانه درباره استان!</span>
        </div>
    </div>
    <main role="main">
        <div class="pui-col xs-12 sm-10 sm-offset-1 md-8 md-offset-2">
            <div class="container">
                <div class="row">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <hr>
                    <h3>مشاهیر استان</h3>
                    <ul>
                        <li>اصغر</li>
                        <li>اکبر</li>
                    </ul>
                    <hr>
                    <h3>مکان های دیدنی</h3>
                    اینجا توی چند تا کارت، جاهای دیدنی رو میزاریم.
                    <hr>
                    <div class="images">
                        <div class="pui-col xs-12 sm-6 md-4 lg-3">
                            یه عکس!
                        </div>
                        <div class="pui-col xs-12 sm-6 md-4 lg-3">
                            یه عکس!
                        </div>
                        <div class="pui-col xs-12 sm-6 md-4 lg-3">
                            یه عکس!
                        </div>
                        <div class="pui-col xs-12 sm-6 md-4 lg-3">
                            یه عکس!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="assets/dist/jquery-3.1.1.min.js"></script>
<script src="assets/dist/pui.min.js"></script>
<script src="assets/demo.min.js"></script>
</html>
