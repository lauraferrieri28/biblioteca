<?php

$host = "127.0.0.1";
$username = "martylauraBiblio";
$password = "password";
$db = "Biblioteca";

$conn = mysqli_connect($host, $username, $password, $db);

if(!$conn) {
    die ("Connessione Fallita: " . mysqli_connect_error(). "\n");
}

$sql = "CREATE TABLE Posizioni (
    ID_posizione INT(6) PRIMARY KEY,
    zona CHAR NOT NULL,
    scaffale INT(2) NOT NULL
)";

if(mysqli_query($conn, $sql)) {
    echo "Tabella Posizioni creata con successo\n";
} else {
    echo "Errore creazione tabella: " . mysqli_error($conn)."\n";
}

mysqli_close($conn);
?>