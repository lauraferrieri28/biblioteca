<?php

$host = "127.0.0.1";
$username = "martylauraBiblio";
$password = "password";
$db = "Biblioteca";

$conn = mysqli_connect($host, $username, $password, $db);

if(!$conn) {
    die ("Connessione Fallita: " . mysqli_connect_error(). "\n");
}

$sql = "CREATE TABLE Libri (
    ID_Libro INT(6) PRIMARY KEY,
    titolo VARCHAR(100) NOT NULL,
    anno YEAR NOT NULL,
    genere VARCHAR(50) NOT NULL,
    AutoreID INT(6),
    EditoreID INT(6),
    PosizioneID INT(6),
    CONSTRAINT FK_LA FOREIGN KEY (AutoreID)
    REFERENCES Autori(ID_Autore),
    CONSTRAINT FK_LE FOREIGN KEY (EditoreID)
    REFERENCES Editori(ID_Editore),
    CONSTRAINT FK_LP FOREIGN KEY (PosizioneID)
    REFERENCES Posizioni(ID_Posizione)
)";

if(mysqli_query($conn, $sql)) {
    echo "Tabella Libri creata con successo\n";
} else {
    echo "Errore creazione tabella: " . mysqli_error($conn)."\n";
}

mysqli_close($conn);
?>