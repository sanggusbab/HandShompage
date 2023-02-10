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
    <script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/common/fontawesomeCommonImport.php';
    ?>
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