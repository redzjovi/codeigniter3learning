<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Students Example</title>
</head>

<body>
    <?php
    echo form_open('users/create_action');
    echo form_label('Username');
    echo form_input(array('name' => 'username'));
    echo "<br/>";

    echo form_label('Name');
    echo form_input(array('name' => 'name'));
    echo "<br/>";

    echo form_label('Password');
    echo form_input(array('name' => 'password', 'type' => 'password'));
    echo "<br/>";

    echo form_submit(array('value' => 'Create'));
    echo form_close();
    ?>
</body>

</html>
