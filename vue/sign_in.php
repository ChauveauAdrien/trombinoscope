<?php
require_once __DIR__.'/../inc/header.php';
require_once '../functions.php';
?>
<main class="login">
<p class="login__logo">Trombinoscop</p>
<div class="sign-in__form">
    <form action="../controllers/sign_in-controller.php" method="post" enctype="multipart/form-data">
        <div class="form__wrapper">
            <div class="form-left">
            <!-- nom -->
            <input type="text" id="lname" name="lname" value="" placeholder="Nom"><br>
            <!-- prenom -->
            <input type="text" id="fname" name="fname" value="" placeholder="Prénom"><br>
            <!-- image -->
            <!-- <label for="image">Choisis un selfie de toi :</label> -->
            <input type="file" name="image">
            <!-- description -->
            <input type="text" id="sentence" name="sentence" value="" placeholder="Description"><br>
            </div>
            <div class="form-right">
                <!-- level -->
                <div class="levels">
                    <label for="levels">Quel est ton niveau :</label>
                    <select name="levels" id="levels">
                        <?php foreach (get_levels() as $level) : ?>
                            <option value="<?= $level['level_id'] ?>"><?= $level['level_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- identifiant -->
                <input type="text" id="identifiant" name="identifiant" value="" placeholder="Identifiant"><br>
                <!-- mot de passe -->
                <input type="password" id="mdp" name="mdp" value="" placeholder="Mot de passe"><br><br>
                <input type="password" id="confirm-mdp" name="confirm-mdp" value="" placeholder="Confirmer le mot de passe"><br><br>
                
            </div>
        </div>
        <p>
            <?php if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo 'Nom invalide';
                    }elseif ($_GET['error'] == 2) {
                        echo 'Prénom invalide';
                    }elseif ($_GET['error'] == 3) {
                        echo 'Identifiant invalide, il doit contenir au minimum 4 caractères';
                    }elseif ($_GET['error'] == 4) {
                        echo 'Mot de passe invalide, il doit contenir au minimum 1 majuscule, 1 chiffre, et 8 caractères';
                    }elseif ($_GET['error'] == 5) {
                        echo 'Les mots de passes sont différents';
                    }
                    }else {
                        echo '';
                    }
            ?></p>
        <input type="submit" value="Créer mon compte">
        <a class="retour__form" href="../index.php">Retour</a>
        
    </form>
</div>
<!-- <div>
    <h2 class="login__log"><a href="../vue/dashboard.php">Se connecter</a></h2>
    <p>Je n'ai pas de compte ? <span>Créer mon compte</span></p>
</div> -->


</main>


<!-- footer -->
<?php
require_once __DIR__.'/../inc/footer.php';
?>