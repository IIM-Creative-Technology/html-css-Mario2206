<?php 
$url = "http://" . $_SERVER["SERVER_NAME"] . "/public/";
define("IMG_DIR", $url . "img/");
define("CSS_DIR", $url . "style/")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?=CSS_DIR?>common.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>home.css">
</head>
<body>
    <header>
        <span>Clairvoyance</span>
        <button>
            <img src="<?=IMG_DIR?>burger.png" alt="burger">
        </button>
    </header>
    <main>
        <section>
            <h1>Jeu interactif et social</h1>
            <img src="<?=IMG_DIR?>data.jpg" alt="">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                at fugiat eaque placeat, neque ullam voluptas quos pariatur ratione provident? Omnis dolorum
                 libero tempora eveniet eligendi.
            </p>
        </section>
        <section>
            <h1>Jouer avec vos amis ... ou pas</h1>
            <img src="<?=IMG_DIR?>die.jpg" alt="">
            <p>
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
    <footer>
        <span>@clairvoyance</span>
        <div>
            <a href="#">
                <img src="<?=IMG_DIR?>fb.png" alt="Facebook" title="Facebook">
            </a>
            <a href="#">
                <img src="<?=IMG_DIR?>insta.png" alt="Instagram" title="Instagram">
            </a>
            <a href="#">
                <img src="<?=IMG_DIR?>twitter.png" alt="Twitter" title="Twitter">
            </a>
        </div>
    </footer>
</body>
</html>