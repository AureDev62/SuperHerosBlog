<?php

$page_title = 'articles en ligne';

ob_start();

?>


<main>
    <h2>Tableau articles</h2>
</main>


<?php

$content = ob_get_clean();

require_once('../../www/SuperHerosBlog/app/views/templates/default.php');
