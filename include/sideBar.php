<input type="checkbox" id="menuicon">
<label for="menuicon">
    <span></span>
    <span></span>
    <span></span>
</label>
<label for="menuicon">
    <img src="./images/resource/slideBarArrow.png" alt="slideBarArrow">
</label>
<div class="sidebar">
    <div class="relative">
        <div class="sidebarLogo">
            <a href="./index.php">
                <img src="./images/usingLogos/handsNormalTransparent.png" alt="handsNormalTransparent">
            </a>
        </div>
        <input type="checkbox" id="sideBarmenuicon">
        <label for="sideBarmenuicon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <ul class="sidebarContainer">
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . '/include/sideBarList.php';
            ?>
        </ul>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/include/sideBarFooter.php';
        ?>
    </div>
</div>