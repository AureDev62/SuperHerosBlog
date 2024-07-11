<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le blog des super héros</title>
</head>

<body>
    <div class="container">
        <?php
        require_once('./app/views/partials/header.php');
        echo ($content);
        require_once('./app/views/partials/footer.php');
        ?>
    </div>
</body>

</html>