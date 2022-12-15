<?php

require_once __DIR__.'/../inc/header.php';
require_once '../functions.php';
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
}
$level_name = get_level_by_id($_SESSION['user_level']);
// print_r($level_name[0]['level_name']);
?>
<main class="dashboard">
    <div class="dashboard__nav">
        <img src="../assets/img/search.svg" alt="search">
        <div></div>
        <a href="../vue/account.php"><img src="../assets/img/user.svg" alt="user"></a>
    </div>
    <div class="dashboard__content">
        <div class="dashboard__title">
            <a href="../vue/trombi.php">
                <p class="dashboard__class"><?= $level_name[0]['level_name']; ?></p>
                <p>12 personnes</p>
            </a>
            
        </div>
        <a href=""><img src="../assets/img/plus-circle.svg" alt="add"></a>
    </div>
    <div class="dashboard__pagination">
    <p>1/3</p>
    </div>
</main>

<!-- footer -->
<?php
require_once __DIR__.'/../inc/footer.php';
?>