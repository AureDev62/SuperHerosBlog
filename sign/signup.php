<?php include("../components/header.php"); ?>


<main>
    <h1>Connexion</h1>
    <form action="" method="post">
        <div>
            <label for="pseudo">Votre Pseudo</label>
            <input type="text" name=pseudo" id="">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="" id="">
        </div>
        <div>
            <label for="confirmEmail">Confirmez votre Email</label>
            <input type="email" name="confirmEmail" id="">
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

<?php include("../components/footer.php"); ?>