<?php
require_once __DIR__.'/../inc/header.php';
require_once '../functions.php';
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
}

?>
<main class="trombi">
    <div class="dashboard__nav">
        <a href="../vue/dashboard.php"><img src="../assets/img/arrow-left.svg" alt="search"></a>
        <p>Bachelor 1</p>
        <div></div>
        
    </div>
    <div class="trombi__content">
        <?php foreach (get_users() as $user) : ?>
            <div class="trombi__card">
                <p class="card__title"><?= $user['user_firstname'] ?> <?= $user['user_lastname'] ?></p>
                <!-- <figure><img class="car__img" src="../assets/img/IMG_4923.jpg" alt="^$user['user_id']"></figure> -->
                <figure><img class="car__img" src="<?= $user['image_url'] ?>" alt="^$user['user_id']"></figure>
                <!-- <p></p> -->
                <!--  -->
                <p class="card__p">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,,</p>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- footer -->
<?php
require_once __DIR__.'/../inc/footer.php';
?>