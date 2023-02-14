<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HandS Korea University Community</title>

    <link rel="icon" type="image/png" href="./images/logos/topLogo.png">
    <link rel="stylesheet" href="./css/cssReset.css">
    <link rel="stylesheet" href="./css/footer.css">
    <script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/common/fontawesomeCommonImport.php';
    ?>
</head>

<body>
    <div class="relative" style="overflow:auto; background-color: rgba(245,245,245,1);">
        <div style=" position:absolute; width:100%; height:100%;">
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/handsHomepageHeader.php';
            ?>
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/handsHomepageSlider.php';
            ?>
            <div style="position: relative; width: 100%; min-height:calc(100% - 450px); text-align:center; float: left; clear: both; padding-bottom:120px; overflow:auto">
                <div style="width:1200px; height: auto; background-color: red; margin:auto;">
                    <?php
                    include_once $_SERVER['DOCUMENT_ROOT'] . '/include/totalPostManagementIndex/contentsWrapper.php';
                    ?>
                </div>
                <?php
                include_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
                ?>
            </div>
        </div>
        <div style="top:82px; left:0; position:absolute; width:100%; height:40px;">
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/handsHomepageCommonTopText.php';
            ?>
        </div>
        <div style="top:82px; left:0; position:absolute; width:100%; height:auto; ">
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/handsHomepageSlideBar.php';
            ?>
        </div>
        <div style="width: 100%; height: 2px; position: absolute; top: 80px;  background-color: rgba(139, 28, 33, 1);"></div>
    </div>
</body>

</html>