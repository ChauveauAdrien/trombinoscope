<?php

require_once '../lib/db.php';


function register() {
    $db = db_connect();
    
    $sql = "INSERT INTO users (user_lastname, user_firstname, user_id, user_password, user_image, user_sentence, level_id, admin)
    VALUES ('$_POST[lname]', '$_POST[fname]', '$_POST[identifiant]','$_POST[mdp]', '$_POST[image]', '$_POST[sentence]', , '1')";
    $db->exec($sql);
    header('Location: ../index.php');

}
print_r($_FILES['image']);
if(isset($_FILES['image'])&& $_FILES['image']['error'] == 0){
    $filename = $_FILES['image']['name'];
    print_r($filename);
}


function verify_data() {
    if ( empty($_POST['lname'])) {
        $_POST['lname'] = 0;
    }
    if ( empty($_POST['fname'])) {
        $_POST['fname'] = 0;
    }
    if ( empty($_POST['identifiant'])) {
        $_POST['identifiant'] = 0;
    }
    $regex_lname = preg_match('%^([a-zA-Z]*)$%', $_POST['lname']);
    $regex_fname = preg_match('%^([a-zA-Z]*)$%', $_POST['fname']);
    $regex_user_id = preg_match('%^[a-zA-Z\\d*]{4,20}$%', $_POST['identifiant']);
    $regex_user_password = preg_match('%^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$%', $_POST['mdp']);
    if ($regex_lname == 0) {
        header('Location: ../vue/sign_in.php?error=1');
    }elseif ($regex_fname == 0) {
        header('Location: ../vue/sign_in.php?error=2');
    }elseif ($regex_user_id == 0) {
        header('Location: ../vue/sign_in.php?error=3');
    }elseif ($regex_user_password == 0) {
        header('Location: ../vue/sign_in.php?error=4');
    }elseif ($_POST['mdp'] !== $_POST['confirm-mdp']) {
        header('Location: ../vue/sign_in.php?error=5');
    }else {
        register();
    }

    
}

// verify_data();
