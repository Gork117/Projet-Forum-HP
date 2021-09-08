<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Quizz de répartition de l'école de sorcelerie de Poudlard</h1>

    <form action="test_result.php" method="post">
        <ul id="align-demande">
            <h2>Question 1 : Aube ou crépuscule ?</h2>
            <p>A : Aube</p>
            <p>B : Crépuscule</p>
            <select id='question1' name='question1'>
                <option value="q1_r1">Réponse A</option>
                <option value="q1_r2">Réponse B</option>
            </select>
            <br/>
            <h2>Question 2 : Forêt ou rivère ?</h2>
            <p>A : Forêt</p>
            <p>B : Rivière</p>
            <select id='question2' name='question2'>
                <option value="q2_r1">Réponse A</option>
                <option value="q2_r2">Réponse B</option>
            </select>
            <br/>
            <h2>Question 3 : Lune ou étoile ?</h2>
            <p>A : Lune</p>
            <p>B : Etoile</p>
            <select id='question3' name='question3'>
                <option value="q3_r1">Réponse A</option>
                <option value="q3_r2">Réponse B</option>
            </select>
            <br/>
            <h2>Question 4 : Noir ou blanc ?</h2>
            <p>A : Noir</p>
            <p>B : Blanc</p>
            <select id='question4' name='question4'>
                <option value="q4_r1">Réponse A</option>
                <option value="q4_r2">Réponse B</option>
            </select>
            <br/>
            <h2>Question 5 : Pile ou face ?</h2>
            <p>A : Pile</p>
            <p>B : Face</p>
            <select id='question5' name='question5'>
                <option value="q5_r1">Réponse A</option>
                <option value="q5_r2">Réponse B</option>
            </select>
            <br/>
            <h2>Question 6 : Gauche ou droite ?</h2>
            <p>A : Gauche</p>
            <p>B : Droite</p>
            <select id='question6' name='question6'>
                <option value="q6_r1">Réponse A</option>
                <option value="q6_r2">Réponse B</option>
            </select>
            <br/>
            <h2>Question 7 : Quatre boîtes sont placées devant vous. Laquelle essayez-vous d'ouvrir ?</h2>
            <p>A : La petite boîte en écaille de tortue, ornée d'or, à l'intérieur de laquelle une petite créature semble grogner.</p>
            <p>B : La boîte noire de jais brillante avec une serrure et une clé en argent, marquée d'une rune mystérieuse que vous savez être la marque de Merlin.</p>
            <p>C : Le cercueil en or et orné, debout sur des pieds griffus, dont l'inscription avertit que la connaissance secrète et la tentation insupportable se trouvent à l'intérieur.</p>
            <p>D : La petite boîte en étain, sans prétention et simple, avec un message rayé dessus qui se lit comme suit: «Je ne m’ouvre que pour les dignes».</p>
            <select id='question7' name='question7'>
                <option value="q7_r1">Réponse A</option>
                <option value="q7_r2">Réponse B</option>
                <option value="q7_r3">Réponse C</option>
                <option value="q7_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 8 : Vous et deux amis devez traverser un pont gardé par un troll de la rivière qui insiste pour combattre l'un de vous avant qu'il ne vous laisse tous passer. Est-ce que tu:</h2>
            <p>A : Tente de convaincre le troll de vous laisser passer tous les trois sans vous battre ?</p>
            <p>B : Propose de tirer au sort pour décider lequel d'entre vous combattra ?</p>
            <p>C : Propose de vous battre tous les trois (sans le dire au troll) ?</p>
            <p>D : Est volontaire pour combattre ?</p>
            <select id='question8' name='question8'>
                <option value="q8_r1">Réponse A</option>
                <option value="q8_r2">Réponse B</option>
                <option value="q8_r3">Réponse C</option>
                <option value="q8_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 9 : Une fois par siècle, la plante à Pipaillon produit des fleurs qui adaptent leur parfum pour attirer les imprudents. Si cela vous attirait, cela sentirait :</h2>
            <p>A : Un feu de bois crépitant ?</p>
            <p>B : La mer ?</p>
            <p>C : Un parchemin frais ?</p>
            <p>D : La maison ?</p>
            <select id='question9' name='question9'>
                <option value="q9_r1">Réponse A</option>
                <option value="q9_r2">Réponse B</option>
                <option value="q9_r3">Réponse C</option>
                <option value="q9_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 10 : Un de vos compagnons de maison a triché à un examen de Poudlard en utilisant une plume d'auto-orthographe. 
                Maintenant, il est arrivé en tête de la classe de Sortilèges, vous battant à la deuxième place. 
                Le professeur Flitwick se méfie de ce qui s'est passé. 
                Il vous attire de côté après sa leçon et vous demande si votre camarade de classe a utilisé ou non une plume interdite. Que fais-tu ?
            </h2>
            <p>A : Mentir et dire que vous ne savez pas (mais espérer que quelqu'un d'autre dira la vérité au professeur Flitwick).</p>
            <p>B : Dire au professeur Flitwick qu'il devrait demander à votre camarade de classe (et prévenir votre camarade de classe que s'il ne dit pas la vérité, vous le ferez).</p>
            <p>C : Dire la vérité au professeur Flitwick. Si votre camarade de classe est prêt à gagner en trichant, il mérite d'être découvert. De plus, comme vous êtes tous les deux dans la même maison, tous les points qu'il perd seront récupérés par vous, pour être le premier à sa place.</p>
            <p>D : Ne pas attendre qu'on vous demande de dire la vérité au professeur Flitwick. Si vous saviez que quelqu'un utilisait une plume interdite, vous le diriez au professeur avant le début de l'examen.</p>
            <select id='question10' name='question10'>
                <option value="q10_r1">Réponse A</option>
                <option value="q10_r2">Réponse B</option>
                <option value="q10_r3">Réponse C</option>
                <option value="q10_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 11 : Lequel des éléments suivants trouvez-vous le plus difficile à gérer ?</h2>
            <p>A : Faim</p>
            <p>B : Froid</p>
            <p>C : Solitude</p>
            <p>D : Ennui</p>
            <p>E : Être ignoré</p>            
            <select id='question11' name='question11'>
                <option value="q11_r1">Réponse A</option>
                <option value="q11_r2">Réponse B</option>
                <option value="q11_r3">Réponse C</option>
                <option value="q11_r4">Réponse D</option>
                <option value="q11_r5">Réponse E</option>
            </select>
            <br/>
            <h2>Question 12 : Vous entrez dans un jardin enchanté. Qu'est-ce que vous seriez le plus curieux d'examiner en premier ?</h2>
            <p>A : L'arbre aux feuilles d'argent portant des pommes d'or</p>
            <p>B : Les gros crapauds rouges qui semblent se parler</p>
            <p>C : La piscine bouillonnante, au fond de laquelle tourbillonne quelque chose de lumineux</p>
            <p>D : La statue d'un vieux sorcier avec un œil étrangement scintillant</p>
            <select id='question12' name='question12'>
                <option value="q12_r1">Réponse A</option>
                <option value="q12_r2">Réponse B</option>
                <option value="q12_r3">Réponse C</option>
                <option value="q12_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 13 : Quatre gobelets sont placés devant vous. Lequel choisiriez-vous de boire ?</h2>
            <p>A : Le liquide moussant et argenté qui scintille comme s'il contenait des diamants moulus.</p>
            <p>B : La boisson douce, épaisse et richement violette qui dégage une délicieuse odeur de chocolat et de prune.</p>
            <p>C : Le liquide doré si brillant qu'il fait mal aux yeux, et qui fait danser les lumières solaires tout autour de la pièce.</p>
            <p>D : Le mystérieux liquide noir qui brille comme de l'encre et dégage des fumées qui vous font voir d'étranges visions.</p>
            <select id='question13' name='question13'>
                <option value="q13_r1">Réponse A</option>
                <option value="q13_r2">Réponse B</option>
                <option value="q13_r3">Réponse C</option>
                <option value="q13_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 14 : Quel type d'instrument plaît le plus à votre oreille ?</h2>
            <p>A : Le violon</p>
            <p>B : La trompette</p>
            <p>C : Le piano</p>
            <p>D : Le tambour</p>
            <select id='question14' name='question14'>
                <option value="q14_r1">Réponse A</option>
                <option value="q14_r2">Réponse B</option>
                <option value="q14_r3">Réponse C</option>
                <option value="q14_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 15 : Parmi les propositions suivantes, laquelle détesteriez-vous le plus que les gens vous appellent ?</h2>
            <p>A : Ordinaire</p>
            <p>B : Ignorant</p>
            <p>C : Lâche</p>
            <p>D : Egoïste</p>
            <select id='question15' name='question15'>
                <option value="q15_r1">Réponse A</option>
                <option value="q15_r2">Réponse B</option>
                <option value="q15_r3">Réponse C</option>
                <option value="q15_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 16 : De quelle manière préférerais-tu que les gens se souviennent de toi après ta mort ?</h2>
            <p>A : En se disant que tu leur manques, mais en gardant tout de même le sourire quand ils pensent à toi.</p>
            <p>B : En se racontant inlassablement les récits de tes aventures.</p>
            <p>C : En éprouvant de l'admiration quand ils pensent à tous tes exploits.</p>
            <p>D : Peu importe ce que les gens penseront de moi une fois que je serai mort(e), ce qui compte, c'est ce qu'ils pensent de moi tant que je suis vivant(e).</p>
            <select id='question16' name='question16'>
                <option value="q16_r1">Réponse A</option>
                <option value="q16_r2">Réponse B</option>
                <option value="q16_r3">Réponse C</option>
                <option value="q16_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 17 : Comment aimeriez-vous être connu de l'histoire ?</h2>
            <p>A : Le sage</p>
            <p>B : Le bon</p>
            <p>C : Le grand</p>
            <p>D : L'audacieux</p>
            <select id='question17' name='question17'>
                <option value="q17_r1">Réponse A</option>
                <option value="q17_r2">Réponse B</option>
                <option value="q17_r3">Réponse C</option>
                <option value="q17_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 18 : Un Moldu t'aborde en pleine rue en te lançant qu'il est persuadé que tu es un sorcier ou une sorcière. Que fais-tu ?</h2>
            <p>A : Tu lui demandes pourquoi il pense une chose pareille ?</p>
            <p>B : Tu en conviens et tu lui demandes s'il veut que tu lui jettes gratuitement un petit maléfice pour en être sûr ?</p>
            <p>C : Tu en conviens, puis tu t'en vas nonchalamment en le laissant se demander si tu bluffes ou pas ?</p>
            <p>D : Tu lui réponds que sa santé mentale t'inquiète et tu lui proposes d'appeler immédiatement un médecin ?</p>
            <select id='question18' name='question18'>
                <option value="q18_r1">Réponse A</option>
                <option value="q18_r2">Réponse B</option>
                <option value="q18_r3">Réponse C</option>
                <option value="q18_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 19 : Quel cauchemar te ferait le plus peur ?</h2>
            <p>A : Celui où tu te tiens au sommet de quelque chose de très, très haut et tu te rends subitement compte que tu n'as aucun point d'appui ni aucune barrière pour t'empêcher de tomber dans le vide.</p>
            <p>B : Celui où tu es enfermé(e) dans une pièce sombre et sans fenêtre et où un œil mystérieux t'observe à travers le trou de la serrure.</p>
            <p>C : Celui où tu découvres, en te réveillant un beau matin, que tes amis et tes proches ne te reconnaissent plus.</p>
            <p>D : Celui où tu parles avec une voix tellement ridicule que personne ne te comprend et tout le monde se moque de toi.</p>
            <select id='question19' name='question19'>
                <option value="q19_r1">Réponse A</option>
                <option value="q19_r2">Réponse B</option>
                <option value="q19_r3">Réponse C</option>
                <option value="q19_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 20 : S'il te fallait faire un choix, tu préférerais inventer une potion te garantissant…</h2>
            <p>A : L'amour</p>
            <p>B : La gloire</p>
            <p>C : La sagesse</p>
            <p>D : Le pouvoir</p>
            <select id='question20' name='question20'>
                <option value="q20_r1">Réponse A</option>
                <option value="q20_r2">Réponse B</option>
                <option value="q20_r3">Réponse C</option>
                <option value="q20_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 21 : Si vous pouviez avoir un pouvoir, lequel choisirez-vous ?</h2>
            <p>A : Le pouvoir de lire dans les pensées</p>
            <p>B : Le pouvoir de l'invisibilité</p>
            <p>C : Le pouvoir de la force surhumaine</p>
            <p>D : Le pouvoir de parler aux animaux</p>
            <p>E : Le pouvoir de changer le passé</p>
            <p>F : Le pouvoir de changer votre apparence à volonté</p>
            <select id='question21' name='question21'>
                <option value="q21_r1">Réponse A</option>
                <option value="q21_r2">Réponse B</option>
                <option value="q21_r3">Réponse C</option>
                <option value="q21_r4">Réponse D</option>
                <option value="q21_r5">Réponse E</option>
                <option value="q21_r6">Réponse F</option>
            </select>
            <br/>
            <h2>Question 22 : Quelle route vous tente le plus ?</h2>
            <p>A : La voie large, ensoleillée et herbeuse</p>
            <p>B : La ruelle étroite, sombre et éclairée par des lanternes</p>
            <p>C : Le chemin tortueux et jonché de feuilles à travers les bois</p>
            <p>D : La rue pavée bordée de bâtiments anciens</p>
            <select id='question22' name='question22'>
                <option value="q22_r1">Réponse A</option>
                <option value="q22_r2">Réponse B</option>
                <option value="q22_r3">Réponse C</option>
                <option value="q22_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 23 : Il fait nuit noire, tu marches seul(e) dans une rue mal éclairée. Soudain, tu entends un drôle de bruit dont la provenance semble magique. Que fais-tu ?</h2>
            <p>A : Tu poursuis ton chemin avec prudence, en gardant la main sur ta baguette magique dissimulée sous ton manteau et en restant très vigilant(e) au moindre signe de danger</p>
            <p>B : Tu brandis ta baguette magique et tu tentes de découvrir d'où vient ce bruit</p>
            <p>C : Tu brandis ta baguette magique pour te défendre sans te laisser impressionner</p>
            <p>D : Tu te glisses silencieusement dans la pénombre en attendant la suite des événements et en faisant une liste mentale de tous les sortilèges de défense et d'attaque dont tu pourrais te servir, s'il le fallait</p>
            <select id='question23' name='question23'>
                <option value="q23_r1">Réponse A</option>
                <option value="q23_r2">Réponse B</option>
                <option value="q23_r3">Réponse C</option>
                <option value="q23_r4">Réponse D</option>
            </select>
            <br/>
            <h2>Question 24 : Qu'est-ce que vous avez le plus hâte d'apprendre à Poudlard ?</h2>
            <p>A : Apparition et Disparition (pouvoir se matérialiser et se dématérialiser à volonté)</p>
            <p>B : Transfiguration (transformer un objet en un autre objet)</p>
            <p>C : Voler sur un balai</p>
            <p>D : Sortilèges et maléfices</p>
            <p>E : Tout sur les créatures magiques et comment se lier d'amitié / prendre soin d'elles</p>
            <p>F : Secrets sur le château</p>
            <p>G : Chaque domaine de la magie que je peux</p>
            <select id='question24' name='question24'>
                <option value="q24_r1">Réponse A</option>
                <option value="q24_r2">Réponse B</option>
                <option value="q24_r3">Réponse C</option>
                <option value="q24_r4">Réponse D</option>
                <option value="q24_r5">Réponse E</option>
                <option value="q24_r6">Réponse F</option>
                <option value="q24_r7">Réponse G</option>
            </select>
            <br/>
            <h2>Question 25 : Parmi les créatures suivantes, laquelle aimeriez-vous le plus étudier ?</h2>
            <p>A : Les centaures</p>
            <p>B : Les gobelins</p>
            <p>C : Les êtres de l'eau(Sirènes)</p>
            <p>D : Les fantômes</p>
            <p>E : Les loups-garou</p>
            <p>F : Les trolls</p>
            <select id='question25' name='question25'>
                <option value="q25_r1">Réponse A</option>
                <option value="q25_r2">Réponse B</option>
                <option value="q25_r3">Réponse C</option>
                <option value="q25_r4">Réponse D</option>
                <option value="q25_r5">Réponse E</option>
                <option value="q25_r6">Réponse F</option>
            </select>
            <br/>
            <h2>Question 26 : Un troll est devenu fou dans le bureau du directeur à Poudlard. 
                Il est sur le point d'écraser et de déchirer plusieurs objets et trésors irremplaçables. Dans quel ordre sauveriez-vous ces objets du club des trolls, si vous le pouviez ?</h2>
            <p>A : 1 ) Le livre 2) Les carnets 3) Le remède</p>
            <p>B : 1) Le livre 2) Le remède 3) Les carnets</p>
            <p>C : 1) Les carnets 2) Le livre 3) Le remède</p>
            <p>D : 1) Les carnets 2) Le remède 3) Le livre</p>
            <p>E : 1) Le remède 2) Le livre 3) Les carnets</p>
            <p>F : 1) Le remède 2) Les carnets 3) Le livre</p>
            <select id='question26' name='question26'>
                <option value="q26_r1">Réponse A</option>
                <option value="q26_r2">Réponse B</option>
                <option value="q26_r3">Réponse C</option>
                <option value="q26_r4">Réponse D</option>
                <option value="q26_r5">Réponse E</option>
                <option value="q26_r6">Réponse F</option>
            </select>
            <br/>
            <h2>Question 27 : Tu préférerais que les autres…</h2>
            <p>A : T'envient</p>
            <p>B : T'imitent</p>
            <p>C : Te fasse confiance</p>
            <p>D : T'admirent</p>
            <p>E : T'aiment</p>
            <p>F : Te craignent</p>
            <select id='question27' name='question27'>
                <option value="q27_r1">Réponse A</option>
                <option value="q27_r2">Réponse B</option>
                <option value="q27_r3">Réponse C</option>
                <option value="q27_r4">Réponse D</option>
                <option value="q27_r5">Réponse E</option>
                <option value="q27_r6">Réponse F</option>
            </select>
            <br/>
            <br/>
            <div class="button">
                <button type="submit">Résultat</button>
            </div>
        </ul>
    </form>
</body>
</html>