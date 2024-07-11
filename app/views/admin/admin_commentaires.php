<?php

$page_title = ' admin commentaires';

ob_start();

?>


<main>
    <h2>Tableau commentaires</h2>
</main>


<?php

$content = ob_get_clean();

require_once('../../www/SuperHerosBlog/app/views/templates/default.php');
