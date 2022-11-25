<?php

$host = "127.0.0.1";
$username = "martylauraBiblio";
$password = "password";

$conn = mysqli_connect($host, $username, $password);

if(!$conn) {
    die("Connessione fallita: " . mysqli_connect_error()."\n");
}

$sql = "CREATE DATABASE Biblioteca";

if(mysqli_query($conn, $sql)) {
    echo "Database creato con successo\n";
} else {
    echo "Errore durante la creazione: ".mysqli.error($conn);
}

mysqli_close($conn);
?>