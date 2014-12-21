<html>
    <?php include 'ContentManagementSystemParts/Head.html'; ?>
    <body>
        <?php include 'ContentManagementSystemParts/Label.php'; ?>
        <div class="logIn">
            <div>
                <form method="post" action="../index.php">
                    <input type="text" name="login" placeholder="Login:"/>
                    <input type="password" name="password" placeholder="Password:"/>
                    <button type="submit" name="function" value="login">Zaloguj</button>
                </form>
            </div>
        </div>
    </body>
</html>