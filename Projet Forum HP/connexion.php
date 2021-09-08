<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    
    <header>
        <div>
            <a href="inscription.php">Inscription</a>
            <a href="connexion.php">Connexion</a>
        </div>

        <nav>
            <ul>
                <li> 
                    <a href="index.php">Accueil</a>
                </li>

                <li> 
                    <a href="forum.php">Forum | Théorie</a>
                </li>

                <li> 
                    <a href="banquet.php">Banquet</a>
                </li>
            </ul>
        </nav>
    </header>

    <form action="connexion.php" method="post">
        <ul id="align-demande">
            <li class="part-form">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo"/>
            </li>
            <br/>
            <li class="part-form">
                <label for="msg">Mot de passe</label>
                <input type="password" id="pass" name="pass"/>
            </li>
            <br/>
            <li class="button">
                <button type="submit">Connexion</button>
            </li>
        </ul>
    </form>

    <?php
        if (isset($_POST['pseudo']) AND isset($_POST['pass'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $pass = htmlspecialchars($_POST['pass']);
            $pass_hache = $pass;

            try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=hp_forum;charset=utf8', 'root', '1234');
                }
            catch (Exception $e)
                {
                    die('Erreur : ' . $e->getMessage());
                }

            $requete = $bdd->prepare('SELECT maison, pass, lien_avatar, user_role, major FROM membres WHERE pseudo=?');
            $requete->execute(array($pseudo));
            $donnees = $requete->fetch();

            if ($donnees != []) {
                if (password_verify($pass_hache, $donnees['pass'])) {
                    session_start();
                    $_SESSION['pseudo'] = $pseudo;
                    $_SESSION['maison'] = $donnees['maison'];
                    $_SESSION['lien_avatar'] = $donnees['lien_avatar'];
                    $_SESSION['user_role'] = $donnees['user_role'];
                    $_SESSION['major'] = $donnees['major'];
                    header('Location: index.php');
                }else {
                    echo 'Mot de passe incorrect';
                }
            }else {
                echo 'Pseudo inexistant';
            }
        }
    ?>

    <p><a href= "inscription.php">Pas encore inscrit ? Allez-y !</a></p>
    <p><a href= "index.php">Retour à l'acceuil</a></p>
    
</body>
</html>