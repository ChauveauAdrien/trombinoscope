<?php
require_once __DIR__.'/../inc/header.php';
require_once '../functions.php';
$infos = get_info_from_id($_SESSION['id']);
?>

<main class="trombi">
    <div class="dashboard__nav">
        <a href="../vue/dashboard.php"><img src="../assets/img/arrow-left.svg" alt="search"></a>
        <p>account</p>
        <div></div>
    </div>
    <div class="account__content">
        <p class="account__lname"><?= $infos[0]['user_lastname']?></p>
        <p class="account__fname"><?= $infos[0]['user_firstname']?></p>
        <p class="account__desc"><?= $infos[0]['user_sentence']?></p>
        <p class="account__level"></p>
        <p class="account__classe"></p>
        <a href="../controllers/account-controller.php">Deconnexion</a>
        <a class="delete" href="?delete=true">Supprimer mon profil</a>
    </div>
</main>

<!-- footer -->
<?php
require_once __DIR__.'/../inc/footer.php';
?>