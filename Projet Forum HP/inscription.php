<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
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

    <h1>Inscription</h1>

    <main>
        <form action="inscription.php" method="post">
            <ul>
                <li>
                    <label for="pseudo">Pseudo</label>
                    <input type="text" id="pseudo" name="pseudo"/>
                </li>
                <br/>
                <li>
                    <label for="age_user">Age</label>
                    <input type="text" id="age_user" name="age_user"/>
                </li>
                <br/>
                <li>
                    <label for="pass">Mot de passe</label>
                    <input type="password" id="pass" name="pass"/>
                </li>
                <p style = "color: red">Il doit contenir au moins 1 chiffre, une lettre minuscule, une lettre majuscule, un caractères spéciaux(-+!$@%) et faire entre 8 et 15 caractères.</p>
                <br/>
                <li>
                    <label for="pass_verif">Vérification du mot de passe</label>
                    <input type="password" id="pass_verif" name="pass_verif"/>
                </li>
                <br/>
                <li>
                    <label for="email">Adresse email</label>
                    <input type="text" id="email" name="email"/>
                </li>
                <br/>
                <li>
                    <button type="submit">Inscription</button>
                </li>
            </ul>
        </form>

        <?php
            if (isset($_POST['pseudo']) AND isset($_POST['age_user']) AND isset($_POST['pass']) AND isset($_POST['pass_verif']) AND isset($_POST['email'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $age_user = htmlspecialchars($_POST['age_user']);
                $pass = htmlspecialchars($_POST['pass']);
                $pass_verif = htmlspecialchars($_POST['pass_verif']);
                $email = htmlspecialchars($_POST['email']);
                $pseudo_valid = false;
                $pass_valid = false;
                $email_valid = false;

                // Verification Pseudo

                if (preg_match("#^User_Ban_#", $pseudo)) {
                    echo 'pseudo invalide';
                }else {
                    $pseudo_valid = true;
                }                    

                // Verification Pass

                if (preg_match("^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!$@%_])([-+!*$@%_\w]{8,15})$^", $pass)) {
                    if ($pass == $pass_verif) {
                        $pass_valid = true;
                    }else{
                        echo '<br/>les mots de passes ne sont pas identiques';
                    }
                }else {
                    echo '<br/>mot de passe invalide';
                }

                // Verification email

                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
                    $email_valid = true;
                }else {
                    echo '<br/>adresse mail invalide';
                }

                // Si pseudo, pass et mail valid ouvre la base de donné

                if ($pass_valid == true && $email_valid == true && $pseudo_valid == true) {
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=hp_forum;charset=utf8', 'root', '1234');
                    }
                    catch (Exception $e)
                    {
                        die('Erreur : ' . $e->getMessage());
                    }

                    // Cherche les pseudo qui sont déjà pris ou ban

                    $requete = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo=?');
                    $requete->execute(array($pseudo));
                    $donnees = $requete->fetch();
                    $requete->closeCursor();

                    $requete2 = $bdd->prepare('SELECT pseudo FROM ban_list WHERE pseudo=?');
                    $requete2->execute(array($pseudo));
                    $donnees2 = $requete2->fetch();
                    $requete2->closeCursor();

                    // Si pseudo non pris ni ban alors enregistre l'utilisateur

                    if ($donnees['pseudo'] != $pseudo && $donnees2['pseudo'] != $pseudo) {
                        // Hachage du mot de passe
                        $pass_hache = password_hash($pass, PASSWORD_ARGON2I);

                        // Adaptation en fonction de l'âge de l'utilisateur
                        if ($age_user >= 17) {
                            $user_role = 'sorcier';
                        }else{
                            $user_role = 'apprenti sorcier';
                        }

                        if ($age_user >= 18) {
                            $major = 'oui';
                        }else{
                            $major = 'non';
                        }
                                                
                        // Insertion
                        $req = $bdd->prepare('INSERT INTO membres(pseudo, age_user, maison, pass, email, lien_avatar, user_role, major) VALUES(:pseudo, :age_user, :maison, :pass, :email, :lien_avatar, :user_role, :major)');
                        $req->execute(array(
                            'pseudo' => $pseudo,
                            'age_user' => $age_user,
                            'maison' => 'neutre',
                            'pass' => $pass_hache,
                            'email' => $email,
                            'lien_avatar' => '17241-200.png',
                            'user_role'=> $user_role,
                            'major' => $major));

                        $pseudo_valid = false;
                        $pass_valid = false;
                        $email_valid = false;
                        echo 'Compte créer, vous pouvez désormais vous connecter';
                        $req->closeCursor();
                    }else {
                        echo 'Pseudo déjà utilisé';
                    }    
                }
            }
        ?>

    </main>
</body>
</html>