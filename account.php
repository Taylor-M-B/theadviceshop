<?php include( "dbconnect.php" ); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Account Details</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include( "inc_header.php" );
include( "inc_acc_nav.php" ); ?>
<section id="content">
    <h2>Account Details</h2>

    <h2>Profile Picture</h2>
    <img src="images/profilePicture.jpg" alt="" width="310" height="200"/>

    <h3>Username:</h3>
    <p><?php echo $_SESSION['username'] ?></p>

    <h3>Location</h3>
    <p><?php echo $_SESSION['location'] ?></p>

    <a href="update_page.php" class="detailsButton">Update Details</a>


</section>
</body>
</html>
