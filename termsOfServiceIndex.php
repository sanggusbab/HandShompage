<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HandS About Page</title>

    <link rel="icon" type="image/png" href="./images/logos/topLogo.png">
    <link rel="stylesheet" href="./css/cssReset.css">
    <link rel="stylesheet" href="./css/sideBar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sideBarFooter.css">
    <link rel="stylesheet" href="./cssIndexes/contentsContainer.css">
    <script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/common/fontawesomeCommonImport.php';
    ?>
</head>

<body>
    <div class="relative">
        <div class="contentsContainer">
            <div id="contentsWrapper">
                <?php
                include_once $_SERVER['DOCUMENT_ROOT'] . '/include/termsOfServiceIndex/contentsWrapper.php';
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