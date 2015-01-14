<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="galleryEditModule">
            <form action="CMS.php" method="post">
                <div class="galleryItem">
                    <input type="text" name="title" value="<?php echo $gallery->title; ?>"/>
                    <div class="author"><?php echo $gallery->authorName . " " . $gallery->authorSurname; ?></div>
                    <button type="submit" name="function" value="add_gallery">Zapisz</button>
                </div>
                <?php $i = 0; ?>
                <?php foreach ($gallery->photos as $photo) { ?>
                    <div class="photo" style="background-image: url('./Resources/Images/<?php echo $photo->name; ?>')">
                        <a href="Resources/Images/<?php echo $photo->name; ?>">
                            <input name="photo_<?php echo $i; ?>" type="checkbox"/>
                        </a>
                    </div>
                    <?php ++$i ?>
                <?php } ?>
            </form>

        </div>
    </body>
</html>