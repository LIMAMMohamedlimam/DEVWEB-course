<?php


// connexion au BDD local
$conn = new mysqli('localhost', 'root' , '', 'test_db');


// Requête SQL 
$sql = "SELECT id, prenom, nom, age, email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // entête tableau
    echo "<h1>Liste des utilisateurs</h1>";
    echo '<table border="3" style="width: 50%; height: 25%"><tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Âge</th><th>Email</th></tr>';
    
    // les données 
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["prenom"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["age"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "0 résultats";
}


$conn->close();

?>
