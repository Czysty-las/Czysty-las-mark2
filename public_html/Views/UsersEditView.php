<html>
    <?php include 'ContentManagementSystemParts/Head.html'; ?>
    <body>
        <?php include 'ContentManagementSystemParts/Label.php'; ?>
        <div class="usersModule">
            <form action="index.php" method="post">
                <div class="formHolder">
                    <div class="inputHolder">
                        <label>Imie</label> <input type="text" id="Name" value="<?php  echo $_SESSION['rez']->Name;?>"/>
                    </div>
                    <div class="inputHolder">
                        <label>Nzwisko</label> <input type="text" id="Surname" value="<?php echo  $_SESSION['rez']->Surname; ?>"/>
                    </div>
                    <div class="inputHolder">
                        <label>Wiek</label>  <input type="text" id="Age" value="<?php echo  $_SESSION['rez']->Age;?>"/>
                    </div>
                    <div class="inputHolder">
                        <label>Płeć</label>  
                        <select>
                            <option value="M" <?php if( $_SESSION['rez']->Sex == 'M'){?> selected="true" <?php }?>>Mężczyzna</option>
                            <option value="F" <?php if( $_SESSION['rez']->Sex == 'F'){?> selected="true" <?php }?> >Kobieta</option>
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
                        <td colspan="10">Uprawnienia</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Lvl</td>
                        <td>Newsy</td>
                        <td>Kalendarz</td>
                        <td>Galleria</td>
                        <td>W lesie</td>
                        <td>Upcycling</td>
                        <td>Urzytkownicy</td>
                        <td>Konfiguracja</td>
                        <td>Zadania</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td><input type="radio" name="userLvL"/></td>
                        <td><input type="radio" name="news"/></td>
                        <td><input type="radio" name="calendar"/></td>
                        <td><input type="radio" name="gallery"/></td>
                        <td><input type="radio" name="InForest"/></td>
                        <td><input type="radio" name="UpCycling"/></td>
                        <td><input type="radio" name="users"/></td>
                        <td><input type="radio" name="config"/></td>
                        <td><input type="radio" name="tasks"/></td>
                    </tr>
                    <tr>   
                        <td>1</td>
                        <td><input type="radio" name="userLvL"/></td>
                        <td><input type="radio" name="news"/></td>
                        <td><input type="radio" name="calendar"/></td>
                        <td><input type="radio" name="gallery"/></td>
                        <td><input type="radio" name="InForest"/></td>
                        <td><input type="radio" name="UpCycling"/></td>
                        <td><input type="radio" name="users"/></td>
                        <td><input type="radio" name="config"/></td>
                        <td><input type="radio" name="tasks"/></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="radio" name="userLvL"/></td>  
                        <td><input type="radio" name="news"/></td>
                        <td><input type="radio" name="calendar"/></td>
                        <td><input type="radio" name="gallery"/></td>
                        <td><input type="radio" name="InForest"/></td>
                        <td><input type="radio" name="UpCycling"/></td>
                        <td><input type="radio" name="users"/></td>
                        <td><input type="radio" name="config"/></td>
                        <td><input type="radio" name="tasks"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>