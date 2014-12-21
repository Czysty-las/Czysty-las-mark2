<div class="optionBelt">
    <div class="optionsTitle" id="content">
        <p class="title">KONTENT</p>
    </div>
    <?php
    if ($_SESSION['User']->Rights[userLvL] > 0) {
        $_SESSION['news'] = $_SESSION['calendar'] = $_SESSION['gallery'] = $_SESSION['InForest'] = $_SESSION['UpCycling'] = true;
    } else {
        $_SESSION['news'] = (bool)$_SESSION['User']->Rights[news];
        $_SESSION['calendar'] = (bool)$_SESSION['User']->Rights[calendar];
        $_SESSION['gallery'] = (bool)$_SESSION['User']->Rights[gallery];
        $_SESSION['InForest'] = (bool)$_SESSION['User']->Rights[InForest];
        $_SESSION['UpCycling'] = (bool)$_SESSION['User']->Rights[UpCycling];
    }
    ?>
    
    <?php if ($_SESSION['news']) { ?><a class="option" id="news" href="index.php?function=news"/></a><?php } ?>
    <?php if ($_SESSION['calendar']) { ?><a class="option" id="calendar" href="index.php?function=calendar"/></a><?php } ?>
    <?php if ($_SESSION['gallery']) { ?><a class="option" id="gallery" href="index.php?function=gallery"></a><?php } ?>
    <?php if ($_SESSION['InForest']) { ?><a class="option" id="InForest" href="index.php?function=inforest"></a><?php } ?>
    <?php if ($_SESSION['UpCycling']) { ?><a class="option" id="UpCycling" href="index.php?function=upcycling"></a><?php } ?>
</div>
<div class="optionBelt">
    <div class="optionsTitle" id="menage">
        <p class="title">ZARZĄDZAJ</p>
    </div>
    <a class="option" id="users" href="index.php?function=users"></a>
    <a class="option" id="config" href="index.php?function=config"></a>
    <a class="option" id="tasks" href="index.php?function=tasks"></a>
    <a class="option" id="help"></a> 
</div>