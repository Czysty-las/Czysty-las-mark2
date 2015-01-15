<html>
    <head>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'head.html'; ?>
        <link rel="stylesheet" type="text/css" href="Presentation/Style/GalleryStyle.css">
    </head> 
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'baner.html'; ?>
        <div class="container">
            <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'pageNav.html';              // Nawigacja serwisu?>
            <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'socialNetworkNav.html';     // Nawigacja sieci społecznościwych.?>
            <div class="content">

                <div class="galleryList">
                    <?php for ($j = 0; $j < 10; ++$j) { ?>
                        <?php if (isset($gallery[$page][$j])) { ?>
                            <div class="galleryItem"><a class="title" href="index.php?action=Gallery&id=<?php echo $gallery[$page][$j]->Id; ?>"><?php echo $gallery[$page][$j]->title; ?></a></div>
                        <?php } ?>
                    <?php } ?>
                </div>

                <div class="PagesHolder">
                    <div class="PagesNavButton">
                        <?php if ($page > 0) { ?>
                            <a href="index.php?action=Gallery&page=<?php echo ($page - 1); ?>"><<</a>
                        <?php } ?>
                    </div>
                    <div class="PagesButton">
                        <?php for ($i = 0; $i <= $pages; ++$i) { ?>
                            <a href="index.php?action=Gallery&page=<?php echo $i; ?>"><?php echo ($i + 1); ?></a>
                        <?php } ?>
                    </div>   
                    <div class="PagesNavButton">
                        <?php if ($page < $pages) { ?>
                            <a href="index.php?action=Gallery&page=<?php echo ($page + 1); ?>">>></a>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
