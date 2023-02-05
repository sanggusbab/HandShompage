<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HandS About Page</title>

    <link rel="stylesheet" href="./css/cssReset.css">
    <link rel="stylesheet" href="./css/sideBar.css">
    <link rel="stylesheet" href="./css/grayFilter.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sideBarFooter.css">
    <link rel="stylesheet" href="./cssIndexes/contentsContainer.css">
    <link rel="stylesheet" href="./cssIndexes/contactusIndex/contentsWrapper.css">
    <!-- update the core fontawesome file -->
    <link href="/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
    <!-- update any styles .css files you have linked -->
    <link href="/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
    <link href="/fontawesome-free-6.2.1-web/css/brands.css" rel="stylesheet">
    <!-- update existing v5 CSS to use v6 icons and assets -->
    <link href="/fontawesome-free-6.2.1-web/css/v5-font-face.css" rel="stylesheet" />
    <!-- update the all.css file -->
    <link href="/fontawesome-free-6.2.1-web/css/all.css" rel="stylesheet">
    <!-- update any styles .js files you have linked -->
    <script defer src="/fontawesome-free-6.2.1-web/js/solid.js"></script>
    <script defer src="/fontawesome-free-6.2.1-web/js/brands.js"></script>
    <!-- update the core fontawesome.js file -->
    <script defer src="/fontawesome-free-6.2.1-web/js/fontawesome.js"></script>
    <!-- update the all.js file -->
    <script defer src="/fontawesome-free-6.2.1-web/js/all.js"></script>
    <script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
</head>

<body>
    <div class="background zindex01">
        <div class="relative">
            <div class="backgroundImage">
                <img src="./images/resource/contactusIndex/contactusBackground.jpg" alt="contactusBackground">
            </div>
        </div>
    </div>
    <div class="zindex02">
        <div class="grayFilter"></div>
    </div>
    <div class="zindex03 relative">
        <div class="contentsContainer">
            <div id="contentsWrapper">
                <?php
                include_once $_SERVER['DOCUMENT_ROOT'] . '/include/contactusIndex/contentsWrapper.php';
                ?>
            </div>
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
            ?>
        </div>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/include/headerIndexes.php';
        ?>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/include/sideBar.php';
        ?>
    </div>
    <script type="text/javascript" src="./js/contentsWrappertoggle.js"></script>
</body>

</html>