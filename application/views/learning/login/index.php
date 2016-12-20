<html>

<head>
    <title>My Form</title>
</head>

<body>
    <form action="" method="post">
        <?php echo validation_errors(); ?>
        <?php echo form_open('form'); ?>
        <h5>Username</h5>
        <input type="text" name="username" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>
