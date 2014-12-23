<html>
    <?php include 'ContentManagementSystemParts/Head.html'; ?>
    <body>
        <?php include 'ContentManagementSystemParts/Label.php'; ?>
        <div class="usersModule">
            <form action="index.php" method="post">
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
                        <td></td><td><a href="index.php?function=users&sort=name">Imie</a></td><td><a href="index.php?function=users&sort=surname">Nazwisko</a></td><td><a href="index.php?function=users&sort=age">Wiek</a></td><td><a href="index.php?function=users&sort=sex">Płeć</a></td>
                    </tr>
                    <?php foreach ($_SESSION['rez'] as $user) { ?>
                        <tr>
                            <td><input type="checkbox" name="selected_<?php echo $i; ?>" value="selected"<?php if ($all) { ?>checked="checked"<?php } ?>/><a href="index.php?action=edit&user=<?php echo $user->Id; ?>">Edytuj</a><a href="index.php?action=delete&user=<?php echo $user->Id; ?>">Usuń</a><a href="index.php?action=ban&user=<?php echo $user->Id; ?>">Zablokuj</a></td><td><?php echo $user->Name; ?></td><td><?php echo $user->Surname; ?></td><td><?php echo $user->Age; ?></td><td><?php
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
                        <td><a href="index.php?function=users<?php if (!$all) {
                        echo "&select=all";
                    } ?>">Zaznacz wszystkie</a></td><td colspan="4"><button>Edytuj</button><button>Usuń</button><button>Zablokuj</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>