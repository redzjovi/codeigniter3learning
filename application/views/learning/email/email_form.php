<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CodeIgniter Email Example</title>
</head>

<body>
    <?php
    echo $this->session->flashdata('email_sent');
    echo form_open('/learning/email/send_mail');
    ?>

    <input type="checkbox" name="gmail" value="1" />Using Gmail ?
    <br />

    Email from :<input type="email" name="email_from" required />
    <br />
    Password :<input type="password" name="email_from_password" />
    <br />

    Email to :<input type="email" name="email_to" required />
    <input type="submit" value="SEND MAIL">

    <?php echo form_close(); ?>
</body>

</html>
