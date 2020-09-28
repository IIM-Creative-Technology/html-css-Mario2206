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
    <link rel="stylesheet" href="<?=CSS_DIR?>common.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>poll-response.css">
</head>
<body>
    <?php require("./inc/header.php") ?>
    <main>
        <h1>Sujet du sondage</h1>
        <div>
            <img src="<?=IMG_DIR?>koh-lanta.jpg" alt="koh-lanta">
        </div>
        <h2>Ici c'est la question ?</h2>
        <form action="">
            <ul>
                <li>
                    <input type="radio" name="response" id="r1">
                    <label class="radio" for="r1">
                        <img src="<?= IMG_DIR ?>ok_icon.png" alt="">
                    </label>
                    <label for="r1">Les rouges</label>
                    <img src="<?= IMG_DIR ?>info.png" alt="" class="data-icon">
                </li>
                <li>
                    <input type="radio" name="response" id="r2">
                    <label class="radio" for="r2">
                        <img src="<?= IMG_DIR ?>ok_icon.png" alt="">
                    </label>
                    <label for="r2">Les bleus</label>
                </li>
                <li>
                    <input type="radio" name="response" id="r3">
                    <label class="radio" for="r3">
                        <img src="<?= IMG_DIR ?>ok_icon.png" alt="">
                    </label>
                    <label for="r3">Les verts</label>
                </li>
                <li>
                    <input type="radio" name="response" id="r4">
                    <label class="radio" for="r4">
                        <img src="<?= IMG_DIR ?>ok_icon.png" alt="">
                    </label>
                    <label for="r4">Les jeunes</label>
                </li>
            </ul>
        </form>
        <div>
            <h3>Favoris : <u>Les rouges</u></h3>
            <div>
                <img src="<?= IMG_DIR?>users.png" alt="users">
                <span>1,256</span>
            </div>
        </div>
        <div>
            <input type="submit" value="Confirmer">
        </div>
    </main>
    <?php require("./inc/footer.php") ?>
</body>
</html>