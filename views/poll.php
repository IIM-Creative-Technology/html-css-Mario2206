<?php 
    $url = "http://" . $_SERVER["SERVER_NAME"];
    define("IMG_DIR", $url . "/public/" .  "img/");
    define("CSS_DIR", $url . "/public/" . "style/");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage</title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>header.css">
    <link rel="stylesheet" href="<?=CSS_DIR?>common.css">
    <link rel="stylesheet" href="<?= CSS_DIR ?>poll.css">
</head>
<body>
    <?php require("./inc/header.php") ?>
    <div>
        <label for="search-bar">
            <img src="<?=IMG_DIR?>search.png" alt="search"/>
        </label>
        <input type="text" name="search-bar" id="search-bar"/>
    </div>
    <main>
        <h1>Les plus populaires</h1>
        <section>
            <?php 
                ob_start()
            ?>
            <a class="poll-containers" href="<?= $url ?>/views/poll-response.php">
                <div class="poll-portrait">
                    <div>
                        <img src="<?=IMG_DIR?>koh-lanta.jpg" alt="koh-lanta">
                    </div>                   
                </div>
                <div>
                    <h2>Titre</h2>
                    <i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                        at fugiat...
                    </i>
                </div>
                <div class="poll-score">
                    <span class="text-green">10</span>
                    <img src="<?=IMG_DIR?>trophy.png" alt="">
                </div>
            </a>
            <?php 
                $content = ob_get_clean();
                ob_start();
            ?>
            <a class="poll-containers" href="<?= $url ?>/views/poll-response.php">
                <div class="poll-portrait">
                    <div>
                        <img src="<?=IMG_DIR?>koh-lanta.jpg" alt="koh-lanta">
                    </div>                   
                </div>
                <div>
                    <h2>Titre</h2>
                    <i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quasi odio esse maxime 
                        at fugiat...
                    </i>
                </div>
                <div class="poll-score">
                    <span class="text-orange">5</span>
                    <img src="<?=IMG_DIR?>trophy.png" alt="">
                </div>
            </a>
            <?php 
                $content2 = ob_get_clean();

                for($i = 0; $i < 10; $i++) {
                    echo $i % 2 === 0 ? $content : $content2;    
                }
            ?>
        </section>
        <div class="page-enum">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
        </div>
    </main>
    <?php require("./inc/footer.php") ?>
</body>
</html>