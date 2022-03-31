<!DOCTYPE html>
<html>
    <head>
        <title>Chopes ton stage</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="scss/style.css">

    </head>
    <body>
        <!-- Connexion à la base de donnée -->
            <?php
                $hostname = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'projet_web';
                
                //On essaie de se connecter
                try{
                    $connexion = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
                    //On définit le mode d'erreur de PDO sur Exception
                    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                
                /*On capture les exceptions si une exception est lancée et on affiche
                les informations relatives à celle-ci*/
                catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
                }

                // On récupère l'ID du profil à supprimer
                $SIREN = $_GET['name_id'];
                $sqlQuery = "DELETE FROM company WHERE SIREN = '$SIREN'";
                $recipesStatement = $connexion->prepare($sqlQuery);
                $recipesStatement->execute();
                $recipes = $recipesStatement->fetchAll();?>
                <p>Suppression effectuée</p>
                <a href="listSuppCompany.php">Retour aux Entreprises</a>
                
    </body>
</html>