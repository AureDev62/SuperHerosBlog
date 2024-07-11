<?php

$page_title = 'Dashboard';

ob_start();

?>


<main>
    <h2>Tableau utilisateurs</h2>
</main>


<?php

$content = ob_get_clean();

require_once('../../www/SuperHerosBlog/app/views/templates/default.php');
