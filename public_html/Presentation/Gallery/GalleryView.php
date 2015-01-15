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
                <div class="galleryItem">
                    <div class="title"><?php echo $gallery->title; ?></div>
                </div>
                <?php foreach ($gallery->photos as $photo) { ?>
                    <div class="galleryPhoto" style="background-image: url('./Resources/Images/<?php echo $photo->name; ?>')">
                        <a href="Resources/Images/<?php echo $photo->name; ?>"></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
