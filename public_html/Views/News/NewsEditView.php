<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
    </body>

    <div class="newsModule">
        <form action="CMS.php" method="post">
            <input class="newsTitleInput" type="text" value="<?php echo $_SESSION['rez']->title; ?>" name="title"/>
            <input type="text" hidden="true" value="<?php echo $_SESSION['rez']->ID; ?>" name="ID"/>
            <textarea class="newsContentInput" name="content"><?php echo $_SESSION['rez']->content; ?></textarea>

            <div class="buttonHolder">
                <button class="formButton" type="submit" name="function" value="<?php echo $_GET['mode']; ?>">Zapisz</button>
                <a class="formButton" href="CMS.php?action=list_news">Wróć</a>
            </div>

        </form>
    </div>
</html>