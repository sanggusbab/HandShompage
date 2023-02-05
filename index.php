<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HandS Korea University</title>

    <link rel="stylesheet" href="./css/cssReset.css">
    <link rel="stylesheet" href="./css/sideBar.css">
    <link rel="stylesheet" href="./css/slide.css">
    <link rel="stylesheet" href="./css/grayFilter.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sideBarFooter.css">
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
    <script src="./js/sideBarmenuiconToggle.js"></script>

</head>

<body>
    <div class="background zindex01">
        <div class="relative">
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/slide.php';
            ?>
        </div>
    </div>
    <div class="background zindex02">
        <div class="grayFilter"></div>
    </div>
    </div>
    <div class="background zindex03">
        <div class="relative">
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
            ?>
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/sideBar.php';
            ?>
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
            ?>
        </div>
    </div>
</body>

</html>