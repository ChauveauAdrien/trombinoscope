<?php

require_once '../lib/db.php';
require_once '../functions.php';
// $users = get_users();
// print_r($users);

function sign_in() {
    $users = get_users();
    for ($i=0; $i < sizeof($users); $i++) { 
        if ($users[$i]['user_id'] === $_POST['identifiant'] AND $users[$i]['user_password'] === $_POST['mdp']) {
            session_start();
            $_SESSION['id'] = $users[$i]['id'];
            $_SESSION['user_level'] = $users[$i]['level_id'];
            header("Location: ../vue/dashboard.php");
            break;
            
        } else {
            header("Location: ../index.php");
        }
    }
}

sign_in();