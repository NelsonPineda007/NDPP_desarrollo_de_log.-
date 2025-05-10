<?php
date_default_timezone_set("America/El_Salvador");

$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$usuarios_validos = [
    "NelsonPineda" => "1234",
    "admin" => "toor"
];

if (array_key_exists($usuario, $usuarios_validos) && $usuarios_validos[$usuario] === $pass) {
    $fecha = date("Y-m-d H:i:s");
    $log = "[$fecha] Usuario '$usuario' inició sesión.\n";
    file_put_contents("logs/logins.txt", $log, FILE_APPEND);

    echo "<script>alert('Inicio de sesión exitoso'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='index.php';</script>";
}
?>
