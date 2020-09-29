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
    <title>Réponse au sondage</title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>header.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>common.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>poll-details.css">
</head>
<body>
    <?php require("./inc/header.php") ?>
    <div class="navigation-support">
        <a href="#" class="back-container"></a>
    </div>
    <main>
        <h1>Sujet du sondage</h1>
        <div>
            <img src="<?=IMG_DIR?>koh-lanta.jpg" alt="koh-lanta">
        </div>
        <h2>Ici c'est la question ?</h2>
        <form action="#" method="POST">
            <input type="radio" name="response" id="r1">
            <label class="item-choice" for="r1">
                <span class="radio">
                    <img src="<?= IMG_DIR ?>ok_icon.png" alt="checkbox">
                </span>
                <span>Les rouges</span>
                <span>
                    <img src="<?= IMG_DIR ?>info.png" alt="information" class="data-icon" title="7834 personnes ont déjà voté pour ce choix">
                </span>
            </label>
            <input type="radio" name="response" id="r2">
            <label class="item-choice" for="r2">
                <span class="radio">
                    <img src="<?= IMG_DIR ?>ok_icon.png" alt="checkbox">
                </span>
                <span>Les bleus</span>
                <span>
                    <img src="<?= IMG_DIR ?>info.png" alt="information" class="data-icon" title="7834 personnes ont déjà voté pour ce choix">
                </span>
            </label>
            <input type="radio" name="response" id="r3">
            <label class="item-choice" for="r3">
                <span class="radio">
                    <img src="<?= IMG_DIR ?>ok_icon.png" alt="checkbox">
                </span>
                <span>Les verts</span>
                <span>
                    <img src="<?= IMG_DIR ?>info.png" alt="information" class="data-icon" title="7834 personnes ont déjà voté pour ce choix">
                </span>
            </label>
            <input type="radio" name="response" id="r4">
            <label class="item-choice" for="r4">
                <span class="radio" >
                    <img src="<?= IMG_DIR ?>ok_icon.png" alt="checkbox" >
                </span>
                <span>Les jeunes</span>
                <span>
                    <img src="<?= IMG_DIR ?>info.png" alt="information" class="data-icon" title="7834 personnes ont déjà voté pour ce choix">
                </span>
            </label>         
        </form>
        <div class="favorite-choice screen-anim">
            <h3>Favoris : <u>Les rouges</u></h3>
            <div>
                <img src="<?= IMG_DIR?>users.png" alt="users">
                <span>1,256</span>
            </div>
        </div>
        <div>
            <button type="submit">
                <span class="icon-load"></span>
                Confirmer
            </button>
        </div>
    </main>
    <?php require("./inc/footer.php") ?>
</body>
</html>