<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="newsModule">
            <div class="newsList">
                <?php foreach ($_SESSION['rez'] as $news) { ?>
                    <div class="newsItem">

                        <div class="titleBar">
                            <div class="title"><?php echo $news->title; ?></div><div class="author">
                                <?php echo $news->authorName." ".$news->authorSurname; ?></div><div class="date"><?php echo $news->date; ?></div>
                        </div>

                        <div class="content">
                            <?php echo $news->content; ?>
                        </div>

                        <div class="editBar">
                            <a href="index.php?action=edit_news&news=<?php echo $news->ID; ?>">Edytuj</a>
                            <a href="index.php?action=delete_news&news=<?php echo $news->ID; ?>">Usuń</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>