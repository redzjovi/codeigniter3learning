<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Users Example</title>
</head>

<body>
    <a href="<?php echo site_url('users/create'); ?>">Add</a>

    <table border="1">
        <?php
        $i = 1;
        echo '<tr>';
        echo    '<th>No</th>';
        echo    '<th>Username</th>';
        echo    '<th>Name</th>';
        echo    '<th>Password</th>';
        echo    '<th>Edit</th>';
        echo    '<th>Delete</th>';
        echo '<tr>';

        foreach ((array) $users as $row)
        {
            echo '<tr>';
            echo    '<td>'.$i++.'</td>';
            echo    '<td>'.$row->username.'</td>';
            echo    '<td>'.$row->name.'</td>';
            echo    '<td>'.$row->password.'</td>';
            echo    '<td><a href="'.site_url('users/update/'.$row->id).'">Edit</a></td>';
            echo    '<td><a href="'.site_url('users/delete_action/'.$row->id).'">Delete</a></td>';
            echo '<tr>';
        }
        ?>
    </table>

</body>

</html>
