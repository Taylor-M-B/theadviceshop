<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">

    <aside id="login"><?php
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            echo "Logged in as " . $_SESSION['username'] . "<br>";
            echo "<a href=\"account.php?page=$name\">Account Details</a> ";
        } else {
            echo "<aside id='login'>

                    <form action='login.php' method='post'>
                    Name: <input type='text' name='name'><br>
                    Password: <input type='password' name='password'><br>
                    <input type='submit' value='Login'>
                    </form>

                  </aside>";

        }
        ?>

    </aside>

    <a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>
</header>
