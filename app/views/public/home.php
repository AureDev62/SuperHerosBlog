<?php

$page_title = 'accueil';

ob_start();

?>


<main>
    <h2>Bienvenue sur l'accueil</h2>
</main>


<?php

$content = ob_get_clean();

require_once('./app/views/templates/default.php');
