<?php

$page_title = "Se connecter";

ob_start();

?>


<main>
    <h2>Veuillez vous connecter</h2>
    <form action="" method="post">
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="" id="">
        </div>
        <div>
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Se connecter</button>
    </form>
</main>


<?php


$content = ob_get_clean();
require_once('./app/views/templates/default.php');
