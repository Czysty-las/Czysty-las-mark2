<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="galleryEditModule">
            <form action="CMS.php" method="post" enctype="multipart/form-data">
                <div class="galleryItem">
                    <input type="text" name="title" value="<?php echo $gallery->title; ?>"/>
                    <input type="text" hidden="hidden" name="Id" value="<?php echo $gallery->Id; ?>"/>
                    <div class="author">
                        <?php echo $gallery->authorName . " " . $gallery->authorSurname; ?>
                    </div>
                    <div class="actions">
                        <div class="galleryOption">Opcje</div>
                        <button type="submit" name="function" value="edit_gallery">Zapisz</button>
                        <button type="submit" name="function" value="delate_photo">Usuń zdjęcia</button>
                        <input type="file" multiple="multiple" name="photos[]">
                        <button type="submit" name="function" value="add_photo">Wstaw</button>
                    </div>
                </div>
                <?php $i = 0; ?>
                <?php foreach ($gallery->photos as $photo) { ?>
                    <div class="photo" style="background-image: url('./Resources/Images/<?php echo $photo->name; ?>')">
                        <a href="Resources/Images/<?php echo $photo->name; ?>">
                            <input name="photo_<?php echo $i; ?>" value="<?php echo $photo->name; ?>" type="checkbox"/>
                        </a>
                    </div>
                    <?php ++$i ?>
                <?php } ?>
            </form>

        </div>
    </body>
</html>