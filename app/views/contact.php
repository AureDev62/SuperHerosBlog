<?php

$page_title = "Restons en contact";

ob_start();

?>


<main>
    <h2>Contactez nous</h2>
</main>


<?php


$content = ob_get_clean();
require_once('./app/views/templates/default.php');
