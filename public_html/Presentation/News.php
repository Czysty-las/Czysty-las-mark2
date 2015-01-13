<html>
    <head>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'head.html'; ?>
        <link rel="stylesheet" type="text/css" href="Presentation/Style/NewsStyle.css">
    </head> 
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'baner.html'; ?>
        <div class="container">
            <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'pageNav.html';              // Nawigacja serwisu?>
            <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . 'PageParts' . DIRECTORY_SEPARATOR . 'socialNetworkNav.html';     // Nawigacja sieci społecznościwych.?>
            <?php

            $pages = $posts = 0;

            $page;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else
                $page = 0;


            while ($print = mysql_fetch_array($toPrint)) {
                $News[$pages][$posts++] = new NewsDisplayer($print['Topic'], $print['Content']);

                if ($posts == 10) {
                    ++$pages;
                    $posts = 0;
                }
            }

            for ($j = 0; $j < 10; ++$j) {
                if ($News[$page][$j] != NULL) {
                    $News[$page][$j]->DisplayNews();
                } else {
                    break;
                }
            }

            for ($i = 0; $i <= $pages; ++$i) {
                echo '<a href="News.php?page=' . $i . '">' . ($i + 1) . '</a>';
            }
            ?>
        </div>
    </body>
</html>

