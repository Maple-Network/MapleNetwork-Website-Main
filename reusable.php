<?php

    function ImportTemplate() { ?>

    <?php }

    function ImportHead($Title) { ?>
        <head>
            <title><?php echo $Title ?></title>
            <link rel="shortcut icon" href="files/icon.png" type="image/x-icon" />
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/style.css">
            <script src="js/scripts.js"></script>
        </head>
    <?php }

    function ImportHeader() { ?>
        <header id="header" class="ListClose">
            <a href="index.php" <?php echo basename($_SERVER['PHP_SELF'])==="index.php" ? "class='active'" : "" ;?>><p>Home</p></a>
            <a href="https://hosting.maplenetwork.me/" ><p>Hosting</p></a>
            <a href="https://mc.maplenetwork.me/" ><p>Minecraft</p></a>
            <a href="About.php" <?php echo basename($_SERVER['PHP_SELF'])==="About.php" ? "class='active'" : "" ;?>><p>About Us</p></a>
            <a href="javascript:void(0);" id="ToggleList" >
                <span>&equiv;</span>
            </a>
        </header>
    <?php }

    function ImportFooter() { ?>
        <footer>
                <div class="F1">
                    <p>Contact Us</p>
                    <hr>
                    <a href="mailto:contact@maplenetwork.me"><span>contact@maplenetwork.me</span></a>
                </div>

                <div class="F2">
                    <p>Join The Community</p>
                    <hr>
                    <a href="https://discord.gg/c6KFEw66E5" target="_blank"><span>Discord Server</span></a>
                </div>
        </footer>
    <?php }

    function ImportBigBanner($TextToDisplay) { ?>
        <div class="BigBanner">
            <img src="files/logo-mid.jpeg" alt="MapleNetwork Logo">
            <span><b><?php echo $TextToDisplay ?></b></span>
        </div>
    <?php }

    function ImportSmallBanner($TextToDisplay) { ?>
        <div class="SmallBanner">
            <img src="files/logo-min.jpg" alt="Small MapleNetwork Logo">
            <span><b><?php echo $TextToDisplay ?></b></span>
        </div>
    <?php }
?>