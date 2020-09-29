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
    <title>Résultats</title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>header.css">
    <link rel="stylesheet" href="<?=CSS_DIR ?>common.css">
    <link rel="stylesheet" href="<?= CSS_DIR ?>poll-details.css">
</head>
<body>
    <?php require("./inc/header.php") ?>
    <div class="navigation-support">
        <a href="#">
            <img src="<?= IMG_DIR ?>arrow.png" alt="back image" title="Retour en arrière">
        </a>
    </div>
    <main>
        <h1>Sujet du sondage</h1>
        <div>
            <img src="<?=IMG_DIR?>koh-lanta.jpg" alt="koh-lanta">
        </div>
        <h2>Ici c'est la question ?</h2>
        <div class="diagram">
            <div>
                <strong>Les rouges</strong>
                <div class="graphic" style="width: 20%;">
                    <div class="item">20%</div>
                </div>
            </div>
            <div>
                <strong>Les verts</strong>
                <div class="graphic" style="width: 50%;">
                    <div class="item">50%</div>
                </div>
            </div>
            <div>
                <strong>Les jaunes</strong>
                <div class="graphic" style="width: 20%;">
                    <div class="item">20%</div>
                </div>
            </div>
            <div>
                <strong>Les bleus</strong>
                <div class="graphic" style="width: 10%;">
                    <div class="item">10%</div>
                </div>
            </div>
        </div>
        <div class="favorite-choice">
            <h3>Votre choix lors du sondage : <br/><br> <u>Les rouges</u></h3>
        </div>
        <div class="favorite-choice">
            <h3>Résultat : <u>Les rouges</u></h3>
            <div>
                <span class="text-green">+190</span>
                <img src="<?= IMG_DIR?>trophy.png" alt="users">
            </div>
        </div>
    </main>
    <?php require("./inc/footer.php")?>
</body>
</html>