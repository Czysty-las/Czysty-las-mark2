<html>
    <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Head.html'; ?>
    <body>
        <?php include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemParts' . DIRECTORY_SEPARATOR . 'Label.php'; ?>
        <div class="usersModule">
            <form action="CMS.php" method="post">
                <table>
                    <?php
                    $i = 0;
                    if (isset($_GET['select'])) {
                        if ($_GET['select'] == "all") {
                            $all = true;
                        }
                    } else {
                        $all = false;
                    }
                    ?>
                    <tr>
                        <td>Szukaj:</td><td colspan="3"><input class="search" type="text" placeholder="..."></td><td><button>Szukaj</button></td>
                    </tr>
                    <tr>
                        <td></td><td><a href="CMS.php?function=users&sort=Name">Imie</a></td><td><a href="CMS.php?function=users&sort=Surname">Nazwisko</a></td><td><a href="CMS.php?function=users&sort=Age">Wiek</a></td><td><a href="CMS.php?function=users&sort=Sex">Płeć</a></td>
                    </tr>
                    <?php foreach ($_SESSION['rez'] as $user) { ?>
                        <tr>
                            <td><input type="checkbox" name="selected_<?php echo $i; ?>" value="<?php echo $user->Id; ?>"<?php if ($all) { ?>checked="checked"<?php } ?>/><a href="CMS.php?action=edit_user&user=<?php echo $user->Id; ?>">Edytuj</a><a href="CMS.php?action=delete_user&user=<?php echo $user->Id; ?>">Usuń</a><a href="CMS.php?action=ban&user=<?php echo $user->Id; ?>">Zablokuj</a></td><td><?php echo $user->Name; ?></td><td><?php echo $user->Surname; ?></td><td><?php echo $user->Age; ?></td><td><?php
                                if ($user->Sex == 'M') {
                                    echo 'Mężczyzna';
                                } else {
                                    echo 'Kobieta';
                                }
                                ?></td>
                        </tr>
                        <?php
                        ++$i;
                    }
                    ?>
                    <tr>
                        <td colspan="5"><a href="CMS.php?action=add_user">Dodaj</a></td>
                    </tr>
                    <tr>
                        <td><a href="CMS.php?function=users<?php
                            if (!$all) {
                                echo "&select=all";
                            }
                            ?>">Zaznacz wszystkie</a></td><td colspan="4"><button>Edytuj</button><button>Usuń</button><button>Zablokuj</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>