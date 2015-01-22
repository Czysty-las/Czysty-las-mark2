<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="calendarModule">              
            <form action="CMS.php" method="post">
            
                    <input hidden="hidden" name="Id" value="<?php echo $event->Id;  ?>">
                    <p>Topic: <input name="Topic" value="<?php echo $event->Topic;  ?>"/></p>
                    <p>Description: <textarea name="login" value="<?php echo $event->Description;  ?>"></textarea></p>
                    <p>Event date: <input type="date" name="Date" value="<?php echo $event->Date;  ?>"/></p>
                    <p>Created by: <?php echo $event->UserLogin;  ?></p>              
                
            </div>
            <div class="calendarDescriptionButtons">    
            <a class="formButton" href="CMS.php?action=list_calendar">Wróć</a>
            <a class="formButton" href="CMS.php?action=delete_calendar">Usuń</a>*/
            <p><button type="submit" name="function" value="edit_calendar">Zatwierdz</button></p>
            
            </form>

            
        </div>        
    </body>
</html>

