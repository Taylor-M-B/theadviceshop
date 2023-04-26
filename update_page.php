<?php include("dbconnect.php");
function generate_new_detail($colour, $guitar, $number)
{
    $name_1 = $colour . $_SESSION['username'];
    $name_2 = $_SESSION['username'] . "_is_a_" . $guitar;
    $name_3 = $_SESSION['username'] . $number;
    $names = array($name_1, $name_2, $name_3);

    return $names;
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Update Account Details</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_acc_nav.php"); ?>
<section id="content">

    <h2>Update Account Details</h2>

    <p>Take our advice - it's better if we choose your new details for you!</p>
    <p>Just tell us some information</p>

    <form action='update_page.php' method='post'>
        Favorite Colour: <input type='text' name='colour'><br>
        Favorite Guitar Brand: <input type='text' name="guitar"><br>
        Favorite Number: <input type='number' name='number'><br>
        <input class="detailsButton" type='submit' value='Update my details'>
    </form>

    <?php
    if (isset($_POST['colour']) && isset($_POST['guitar']) && isset($_POST['number'])) {
        $some_names = generate_new_detail($_POST['colour'], $_POST['guitar'], $_POST['number']);
        $count = 1;
        echo "<h3>Here are some usernames you could use: </h3>";
        foreach ($some_names as $name) {
            echo "<p>Username $count:   $name</p>";
            $count++;
        }
    }
    ?>

</section>
</body>
</html>
