
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    if ($_POST["form_id"]=="exo1" ){
        $name = $_POST['name'];
        $prenom = $_POST['prenom'];
        $sex = $_POST['sex'];
        $class = $_POST['class'];

        echo "NOM: " . htmlspecialchars($name) . "<br>";
        echo "Prenom: " . htmlspecialchars($prenom) . "<br>";
        echo "Sex: " . htmlspecialchars($sex) . "<br>";
        echo "Class: " . htmlspecialchars($class) . "<br>";
    }


if($_POST["form_id"]=="login"){
    $utilisateurs = [
        "user1" => "password1",
        "user2" => "password2",
        "user3" => "password3",
        "user4" => "password4",
        "user5" => "password5",
        "user6" => "password6"
    ];



        $username =$_POST["username"] ;
        $password = $_POST['password'] ;

        // Validation des informations de connexion.
        if (array_key_exists($username, $utilisateurs) && $utilisateurs[$username] == $password) {
            // Informations valides, affichage du message de bienvenue.
            echo "Bienvenue";
        } else {
            // Informations invalides, redirection vers la page de connexion.
            //echo "imhere" ;
            header("Location: login.html");
            exit;
        }
    }

}

?>
