<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CodeIgniter Session Example</title>
</head>

<body>
    Welcome <b><?php echo $this->session->userdata('name'); ?></b>
    <br>
    <a href="<?php echo site_url('learning/Session_Controller') ?>">Click Here</a> to unset session data.
</body>

</html>
