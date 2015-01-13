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
                if (isset($_SESSION['rez'][$page][$j])) {
                    ?>

                    <div class="newsItem">
                        <div class="title">
                            <?php echo $_SESSION['rez'][$page][$j]->title; ?>
                        </div>
                        <div class="newsContent">
                            <?php
                            if (strlen($_SESSION['rez'][$page][$j]->content) > 500) {
                                echo substr($_SESSION['rez'][$page][$j]->content, 0, 500);
                            } else {
                                echo $_SESSION['rez'][$page][$j]->content;
                            }
                            ?>
                        </div>
                        <div class="newsReadMore">
                            <a href="index.php?action=News&id=<?php echo $_SESSION['rez'][$page][$j]->ID; ?>">Czytaj wiecej...</a>
                        </div>
                        <div class="newsAuthor">
                            <?php echo $_SESSION['rez'][$page][$j]->authorName . " " . $_SESSION['rez'][$page][$j]->authorSurname; ?>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>
            <div class="newsPagesHolder">
                <div class="newsPagesNavButton">
                    <?php if ($page > 0) { ?>
                        <a href="index.php?action=News&page=<?php echo ($page - 1); ?>"><<</a>
                    <?php } ?>
                </div>
                <div class="newsPagesButton">
                    <?php for ($i = 0; $i <= $pages; ++$i) { ?>
                        <a href="index.php?action=News&page=<?php echo $i; ?>"><?php echo ($i + 1); ?></a>
                    <?php } ?>
                </div>   
                <div class="newsPagesNavButton">
                    <?php if ($page < $pages) { ?>
                        <a href="index.php?action=News&page=<?php echo ($page + 1); ?>">>></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</html>

