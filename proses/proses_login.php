<?php

    require_once("../core/koneksi.php");
    $core = new Koneksi();
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $core->login($username, $password);

?>