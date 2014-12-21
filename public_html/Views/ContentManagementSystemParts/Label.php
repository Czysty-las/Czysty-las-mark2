<div class="label">
    <div class="titleDivision">
        <div class="titleContainer">
            <p class="pageTitles" id="CMSname">Content menagment system</p>
        </div>
    </div>
    <div class="titleDivision">
        <a id="home" href="CMS.php?function=menu"></a>
    </div>
    <div class="titleDivision">
        <div class="userMenu">
            <?php if (isset($_SESSION['User'])) {?>
            <div class="userName"><p class="pageTitles"><?php echo $_SESSION['User']->Name . ' ' . $_SESSION['User']->Surname;?></p></div>
            <div class="userOption"><a class="pageTitles">Profil</a></div>
            <div class="userOption"><a class="pageTitles">Zadania</a></div>
            <div class="userOption"><a class="pageTitles" href="CMS.php?function=logoff">Wyloguj</a></div>
            <?php } ?>
        </div>
    </div>    
</div>