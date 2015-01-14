<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="galleryModule">
            <?php if (isset($_GET['add']) && $_GET['add']) { ?>
                <form action="CMS.php" method="post">
                    <div class="galleryItem">
                        <input type="text" name="title"/><button type="submit" name="function" value="add_gallery">Dodaj</button>
                    </div>
                </form>
            <?php } else { ?>
                <a  class="addNewsButton" href="CMS.php?action=list_gallery&add=true">Dodaj!</a>
            <?php } ?>

            <?php foreach ($gallery as $item) { ?>    
                <div class="galleryItem">
                    <div class="title"><?php echo $item->title; ?></div>
                    <div class="author"><?php echo $item->authorName." ".$item->authorSurname; ?></div>
                    <div class="button">
                        <a href="CMS.php?action=edit_gallery&gallery=<?php echo $item->Id; ?>">Edytuj</a>
                    </div>
                    <div class="button">
                        <a href="CMS.php?action=delete_gallery&gallery=<?php echo $item->Id; ?>">Usuń</a>
                    </div>
                </div>
            <?php } ?>    
        </div>

    </body>
</html>