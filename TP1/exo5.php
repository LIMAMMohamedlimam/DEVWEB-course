<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$username = 'root'; // Remplacer par votre nom d'utilisateur pour la base de données
$password = ''; // Remplacer par votre mot de passe pour la base de données
$dbname = 'test_db';

// Création d'une connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour sélectionner toutes les données de la table user
$sql = "SELECT id, prenom, nom, age, email FROM user";
$result = $conn->query($sql);

// Vérification s'il y a des résultats
if ($result->num_rows > 0) {
    // Début du tableau HTML
    echo "<table border='1'><tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Âge</th><th>Email</th></tr>";
    
    // Affichage de chaque ligne de résultat
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["prénom"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["age"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    
    // Fin du tableau
    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermeture de la connexion
$conn->close();

?>
