<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rouge {
             color: #ff0000;   
        }
        </style>
</head>
<body>
    <h1>FICHIER PHP</h1>
    <?php
        echo "Cette fois, mon PHP est <strong>interprété</strong><br>";

        $chaine = "c'est le cours de logique";
        /*
        La fonction strlen renvoie la taille d'une chaîne de caractères
        */
        echo "La longueur de la chaîne de caractères est" . strlen($chaine);
        echo "<br>";
     

        $mdp = "azerazerazerazer";

        // if( strlen($mdp) >= 10 && strlen($mdp) <= 15) {
        //     echo "le mot de passe est valide";
        // } else {
        //     echo "le mot de passe est invalide";
        // }
        
        if( strlen($mdp) >= 10) {
                       
            if( strlen($mdp) <= 15) {
                if( strlen($mdp) == 12) {
                    echo "le mot de passe fait 12 caractères";
                 } else {
                echo "le mot de passe est valide"; 
            } 
        } else {
                echo "<div class='rouge'>le mot de passe est trop long</div>";
            }
            
        } else {
            echo "le mot de passe est trop court";
        }
    ?>
    
    <p>Nouvelle ligne</p>
</body>
</html>