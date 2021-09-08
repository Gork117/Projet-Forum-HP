<!DOCTYPE html>
<html lang="fr">
<?php
    session_start()
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <header>

        <?php
            if (isset($_SESSION['pseudo'])) {
                echo '<img src="img/' . $_SESSION['lien_avatar'] . '" alt="">';
                echo '<p><strong>' . $_SESSION['pseudo'] . '</strong></p>';
                echo '<p><a href="deconnexion.php">Deconnexion</a></p>';
            }else {
                echo '<div>
                    <a href="inscription.php">Inscription</a>
                    <a href="connexion.php">Connexion</a>
                </div>';
            }
        ?>

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

                <?php
                    if (isset($_SESSION['pseudo'])) {
                        echo '<li>
                            <a href="profil.php">Profil</a>
                        </li>';
                    }
                    if (isset($_SESSION['major'])) {
                        if ($_SESSION['major'] == 'oui') {
                            echo '<li>
                                <a href="directory_desk.php">Bureau du directeur</a>
                            </li>';
                        }
                    }
                    if (isset($_SESSION['maison'])) {
                        if ($_SESSION['maison'] == 'neutre') {
                            echo '<li>
                                <a href="test_home.php">Quizz de la répartition</a>
                            </li>';
                        }
                    }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            
        ?>
    </main>
</body>
</html>