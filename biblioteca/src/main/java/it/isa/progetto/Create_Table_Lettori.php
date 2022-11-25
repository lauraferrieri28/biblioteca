<?php

$host = "127.0.0.1";
$username = "martylauraBiblio";
$password = "password";
$db = "Biblioteca";

$conn = mysqli_connect($host, $username, $password, $db);

if(!$conn) {
    die ("Connessione Fallita: " . mysqli_connect_error(). "\n");
}

$sql = "CREATE TABLE Lettori (
    ID_Lettore INT(6) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cognome VARCHAR(100) NOT NULL,
    citta VARCHAR(50) NOT NULL,
    data_nascita DATE NOT NULL,
    email VARCHAR(500) NOT NULL
)";

if(mysqli_query($conn, $sql)) {
    echo "Tabella Lettori creata con successo\n";
} else {
    echo "Errore creazione tabella: " . mysqli_error($conn)."\n";
}

mysqli_close($conn);
?>