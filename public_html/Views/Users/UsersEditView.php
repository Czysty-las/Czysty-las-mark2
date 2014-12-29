<html>
    <?php include _ROOT_PATH.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'ContentManagementSystemParts'.DIRECTORY_SEPARATOR.'Head.html'; ?>
    <body>
        <?php include  _ROOT_PATH.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'ContentManagementSystemParts'.DIRECTORY_SEPARATOR.'Label.php'; ?>
        <div class="usersModule">
            <form action="index.php" method="post">
                <div class="formHolder">
                    <div class="inputHolder">
                        <label>Imie</label> <input type="text" id="Name" value="<?php echo $_SESSION['rez']->Name; ?>"/>
                    </div>
                    <div class="inputHolder">
                        <label>Nzwisko</label> <input type="text" id="Surname" value="<?php echo $_SESSION['rez']->Surname; ?>"/>
                    </div>
                    <div class="inputHolder">
                        <label>Wiek</label>  <input type="text" id="Age" value="<?php echo $_SESSION['rez']->Age; ?>"/>
                    </div>
                    <div class="inputHolder">
                        <label>Płeć</label>  
                        <select>
                            <option value="M" <?php if ($_SESSION['rez']->Sex == 'M') { ?> selected="true" <?php } ?>>Mężczyzna</option>
                            <option value="F" <?php if ($_SESSION['rez']->Sex == 'F') { ?> selected="true" <?php } ?> >Kobieta</option>
                        </select>

                    </div>
                    <div class="inputHolder">
                        <label>aasdas</label>  <input type="text" id="Name"/>
                    </div>
                </div>
                <div class="photoHolder">
                </div>
                <?php // Moduł uprawnień zależny od docelowej aplikacji. ?>
                <table class="tableRights">
                    <tr>
                        <td colspan="10">Ranga</td>
                    </tr>
                    <tr>
                        <td colspan="5">Urzytkownik</td><td colspan="5"><input type="radio" name="userLvL" value="0" <?php if ($_SESSION['rez']->Rights[userLvL] == 0) { ?>checked="checked"<?php } ?>/></td>
                    </tr>
                    <tr>
                        <td colspan="5">Zarządca</td><td colspan="5"><input type="radio" name="userLvL" value="0" <?php if ($_SESSION['rez']->Rights[userLvL] == 1) { ?>checked="checked"<?php } ?>/></td>
                    </tr>
                    <tr>
                        <td colspan="5">Administrator</td><td colspan="5"><input type="radio" name="userLvL" value="0" <?php if ($_SESSION['rez']->Rights[userLvL] < 2) { ?>disabled="true"<?php } ?> <?php if ($_SESSION['rez']->Rights[userLvL] == 2) { ?>checked="checked"<?php } ?>/></td>
                    </tr>
                    <tr>
                        <td colspan="10">Uprawnienia</td>
                    </tr>
                    <tr>
                        <td colspan="10">Tresc</td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td>Newsy</td>
                        <td>Kalendarz</td>
                        <td>Galleria</td>
                        <td>W lesie</td>
                        <td>Upcycling</td>
                    </tr>
                    <tr>
                        <td colspan="5">Brak uprawnień</td>
                        <td><input type="radio" name="news" <?php if ($_SESSION['rez']->Rights[news] == 0) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="calendar" <?php if ($_SESSION['rez']->Rights[calendar] == 0) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="gallery" <?php if ($_SESSION['rez']->Rights[gallery] == 0) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="InForest" <?php if ($_SESSION['rez']->Rights[InForest] == 0) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="UpCycling" <?php if ($_SESSION['rez']->Rights[UpCycling] == 0) { ?>checked="checked"<?php } ?>/></td>
                    </tr>
                    <tr>
                        <td colspan="5">Podstawowe</td>
                        <td><input type="radio" name="news" <?php if ($_SESSION['rez']->Rights[news] == 1) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="calendar" <?php if ($_SESSION['rez']->Rights[calendar] == 1) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="gallery" <?php if ($_SESSION['rez']->Rights[gallery] == 1) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="InForest" <?php if ($_SESSION['rez']->Rights[InForest] == 1) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="UpCycling" <?php if ($_SESSION['rez']->Rights[UpCycling] == 1) { ?>checked="checked"<?php } ?>/></td>
                    </tr>                    
                    <tr>
                        <td colspan="5">Pełne</td>
                        <td><input type="radio" name="news" <?php if ($_SESSION['rez']->Rights[news] == 2) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="calendar" <?php if ($_SESSION['rez']->Rights[calendar] == 2) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="gallery" <?php if ($_SESSION['rez']->Rights[gallery] == 2) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="InForest" <?php if ($_SESSION['rez']->Rights[InForest] == 2) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="UpCycling" <?php if ($_SESSION['rez']->Rights[UpCycling] == 2) { ?>checked="checked"<?php } ?>/></td>
                    </tr>
                    <tr>
                        <td colspan="10">Zarządzanie</td>
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                        <td>Urzytkownicy</td>
                        <td>Zadania</td>
                        <td></td>
                        <td>Konfiguracja</td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td>Brak</td>
                        <td><input type="radio" name="users" <?php if ($_SESSION['rez']->Rights[users] == 0) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="tasks" <?php if ($_SESSION['rez']->Rights[tasks] == 0) { ?>checked="checked"<?php } ?>/></td>
                        <td>Brak</td>
                        <td><input type="radio" name="config" <?php if ($_SESSION['rez']->Rights[config] == 0) { ?>checked="checked"<?php } ?>/></td>

                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td>Pełne</td>
                        <td><input type="radio" name="users" <?php if ($_SESSION['rez']->Rights[users] == 1) { ?>checked="checked"<?php } ?>/></td>
                        <td><input type="radio" name="tasks" <?php if ($_SESSION['rez']->Rights[tasks] == 1) { ?>checked="checked"<?php } ?>/></td>
                        <td>Podstawowa</td>
                        <td><input type="radio" name="config" <?php if ($_SESSION['rez']->Rights[config] == 1) { ?>checked="checked"<?php } ?> </td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Pełna</td>
                        <td><input type="radio" name="config" <?php if ($_SESSION['rez']->Rights[config] == 1) { ?>checked="checked"<?php } ?>  <?php if ($_SESSION['rez']->Rights[userLvL] == 2) { ?>checked="checked"<?php } ?>/></td>
                    </tr>
                </table>
                <div class="buttonHolder">
                    <button class="formButton" type="submit">Zapisz</button>
                    <a class="formButton" href="index.php?function=users">Wróć</a>
                </div>
            </form>
        </div>
    </body>
</html>