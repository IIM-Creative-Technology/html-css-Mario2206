<?php 
    $url = "http://" . $_SERVER["SERVER_NAME"] . "/public/";
    define("IMG_DIR", $url . "img/");
    define("CSS_DIR", $url . "style/");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>header.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>common.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>home.css">
</head>
<body>
   <?php require("./views/inc/header.php") ?>
    <main>
        <section>
            <h1>Jeu interactif et social</h1>
            <img src="<?=IMG_DIR?>data.jpg" alt="Inter-connexion" title="Inter-connexion">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                at fugiat eaque placeat, neque ullam voluptas quos pariatur ratione provident? Omnis dolorum
                 libero tempora eveniet eligendi.
                 <br/>
                 <br/>
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                 at fugiat eaque placeat, neque ullam voluptas quos pariatur ratione provident? Omnis dolorum
                 libero tempora eveniet eligendi.
            </p>
        </section>
        <section>
            <h1>Jouer avec vos amis ... ou pas</h1>
            <img src="<?=IMG_DIR?>die.jpg" alt="Dé" title="Dé">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                at fugiat eaque placeat, neque ullam voluptas quos pariatur ratione provident? Omnis dolorum
                 libero tempora eveniet eligendi.
                 <br/><br/>
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                at fugiat eaque placeat, neque ullam voluptas quos pariatur ratione provident? Omnis dolorum
                 libero tempora eveniet eligendi.
            </p>
        </section>
        <section>
            <a href="#">Se connecter</a>
            <a href="#">S'inscrire</a>
        </section>
    </main>
    <?php require("./views/inc/footer.php") ?>
</body>
</html>