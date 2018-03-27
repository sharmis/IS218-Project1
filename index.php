<?php
require_once('inc/UsersDB.php');
$users = UsersDB::getUsers();
?>
<html>
    <head>
        <title>Project 1</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Password</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <?php echo $user->displayInfoTable(); ?>
            <?php endforeach ?>
        </table>

    </body>
</html>