<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="calendarModule">
                <table>
                    <tr>
                        <td class="eventTitle">Topic</td>
                        <td class="eventTitle">Date of event</td>
                    </tr>

                    <?php 
                    foreach ($_SESSION['rez'] as $event) { ?>
                    <tr>
                        <td class="eventTitle"><a href="index.php?action=edit_calendar&calendar=<?php echo $event->Id; ?>"><?php echo $event->Topic; ?></a> </td>
                        <td class="eventDate"> <?php echo $event->Date; ?> </td>
                    </tr>
                        
                    <?php } ?>
                </table>


        </div>        
    </body>
</html>

