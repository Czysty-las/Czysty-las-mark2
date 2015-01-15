<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="newsModule">            
            <a  class="addNewsButton" href="CMS.php?action=add_news">Dodaj!</a>
                <?php foreach ($news as $_news) { ?>
                    <div class="newsItem">
                        <div class="titleBar">
                            <div class="title" name="title"><?php echo $_news->title; ?></div><div class="author">
                                <?php echo $_news->authorName . " " . $_news->authorSurname; ?></div><div class="date"><?php echo $_news->date; ?></div>
                        </div>

                        <div class="content">
                            <?php echo $_news->content; ?>
                        </div>

                        <div class="editBar">
                            <a href="CMS.php?action=edit_news&news=<?php echo $_news->ID; ?>">Edytuj</a>
                            <a href="CMS.php?action=delete_news&news=<?php echo $_news->ID; ?>">Usuń</a>
                        </div>
                    </div>
                <?php } ?>          
        </div>
    </div>
</body>
</html>