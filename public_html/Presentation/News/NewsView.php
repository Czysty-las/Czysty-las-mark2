<html>
    <head>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'head.html'; ?>
        <link rel="stylesheet" type="text/css" href="Presentation/Style/NewsStyle.css">
    </head> 

    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'baner.html'; ?>
    <div class="container">
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'pageNav.html';              // Nawigacja serwisu?>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'socialNetworkNav.html';     // Nawigacja sieci społecznościwych.?>
        <div class="content">
            <?php
            if (isset($_SESSION['rez'])) {
                ?>

                <p class="title"><?php echo $_SESSION['rez']->title; ?></p>

                <p class="news"><?php echo $_SESSION['rez']->content; ?></p>
                <?php
            }
            ?>
        </div>
    </div>
</html>

