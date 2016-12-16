<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Students Example</title>
</head>

<body>
    <?php
    echo form_open('users/update_action');
    echo form_hidden('id', $id);
    echo form_label('Username');
    echo form_input(array('name' => 'username', 'value' => $users->username));
    echo "<br/>";

    echo form_label('Name');
    echo form_input(array('name' => 'name', 'value' => $users->name));
    echo "<br/>";

    echo form_label('Password');
    echo form_input(array('name' => 'password', 'type' => 'password', 'value' => $users->password));
    echo "<br/>";

    echo form_submit(array('value' => 'Update'));
    echo form_close();
    ?>
</body>

</html>
