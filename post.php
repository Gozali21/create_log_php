<?php 

include "createLog.php";

$data = array();

$username = $_POST['username'];
$password = $_POST['password'];

$data = [
    "username" => 'Username='.$username,
    "password" => 'Password='.$password
];

if (isset($_POST)) {
    if ($username && $password) {
        createLog($data, "TestingCreateLog", "Berhasil", "Data Berhasil Disimpan");
        header("location: index.php");
    } else {
        createLog($data, "TestingCreateLog", "Gagal", "Data Gagal Disimpan");
        header("location: index.php");
    }
}

?>