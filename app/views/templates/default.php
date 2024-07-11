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


        if (isset($_GET['page'])) {
            if (strpos($_GET['page'], 'admin') === 0) {
                require_once('./app/views/admin/partials_admin/header_admin.php');
            } else {
                require_once('./app/views/public/partials/header.php');
            }
        } else {
            require_once('./app/views/public/partials/header.php');
        }
        // require_once('./app/views/partials/header.php');
        echo ($content);
        require_once('./app/views/public/partials/footer.php');
        ?>
    </div>
</body>

</html>