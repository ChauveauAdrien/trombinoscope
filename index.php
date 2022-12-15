<?php
require_once __DIR__.'/../trombinoscope/inc/header.php';

?>
<main class="login">
<p class="login__logo">Trombinoscop</p>
<div class="index__form">
    <form action="./controllers/index-controller.php" method="post">
        <input type="text" id="identifiant" name="identifiant" value="" placeholder="Identifiant"><br>
        <input type="password" id="mdp" name="mdp" value="" placeholder="Mot de passe"><br><br>
        <input type="submit" value="Se connecter">
        <p>Je n'ai pas de compte ? <a href="./vue/sign_in.php">Créer mon compte</a></p>
    </form>
</div>


</main>



<?php
require_once './inc/footer.php';

?>
