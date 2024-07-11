<?php

$page_title = "S'inscrire";

ob_start();

?>


<main>
    <h2>Formulaire d'inscription</h2>
    <form action="#" method="post" id="signupForm">
        <div>
            <label for="pseudo">Votre Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="confirmEmail">Confirmez votre Email</label>
            <input type="email" name="confirmEmail" id="confirmEmail">
        </div>
        <div>
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="confirmPassword">Confirmez votre mot de passe</label>
            <input type="password" name="confirmPassword" id="confirmPassword">
        </div>
        <button type="submit">Se connecter</button>
    </form>
</main>

<?php


$content = ob_get_clean();

require_once('./app/views/templates/default.php');

?>

<!-- <script>
    const signupForm = document.querySelector('#signupForm');

    signupForm.addEventListener('submit', function(e) {
        e.preventDefault();


        const formData = new FormData(signupForm);

        console.log(formData.get('pseudo'));
        console.log(formData.get('email'));
        console.log(formData.get('confirmEmail'));
        console.log(formData.get('password'));
        console.log(formData.get('confirmPassword'));
    })
</script> -->