<header>
        <span>Clairvoyance</span>
        <nav>
            <div>
                <a href="#">
                    <img src="<?= IMG_DIR ?>user.png" alt="utilisateur" title="Se connecter / S'inscrire">
                </a>
            </div>
            <ul>
                <li>
                    <a href="http://<?= $_SERVER["SERVER_NAME"]?>/index.php">Accueil</a>
                </li>
                <li>
                    <a href="http://<?= $_SERVER["SERVER_NAME"]?>/views/poll.php">Sondages</a>
                </li>
                <li>
                    <a href="http://<?= $_SERVER["SERVER_NAME"]?>/views/poll-results.php">Résultats</a>
                </li>
            </ul>
            <button class="close"></button>
        </nav>
        <button class="toggle-button">
            <span></span>
        </button>
</header>