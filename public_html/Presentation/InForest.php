<html>
    <head>
        <?php include './PageParts/head.html'; ?>
        <link rel="stylesheet" type="text/css" href="Assets/Skyle/CallenderStyle.css.css">
    </head> 
    <body>
        <?php include './PageParts/baner.html'; ?>
        <div class="container">
            include '../public_html/PageContentScripts/InForestScript.php';
            echo '</div>';

        <?php if (isset($_GET['Id'])) { ?>
            <div class="footer"></div>
        <?php } ?>

    </div>
</body>
</html>
