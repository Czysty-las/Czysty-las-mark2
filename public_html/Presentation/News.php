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
            for ($j = 0; $j < 10; ++$j) {
                if (isset($_SESSION['rez'][$pages][$j])) {
                    ?>

                    <p class="title"><?php echo $_SESSION['rez'][$page][$j]->title; ?></p>
                    <p class="news"> <?php echo $_SESSION['rez'][$page][$j]->content; ?></p>

                    <?php
                } else {
                    break;
                }
            }

            for ($i = 0; $i <= $pages; ++$i) {
                ?>
            </div>
        </div>
        <a href="index.php?action=News&page=<?php echo $i; ?>"><?php echo ($i + 1); ?></a>
    <?php } ?>


</html>

