<?php

require_once __DIR__ . '/lib/db.php';
session_start();

/***********************************************************
fonction get_user
********************************************************** */
function get_users()
{
    $db = db_connect();

    $sql = <<<EOD
    SELECT id, user_id, user_password, user_lastname, user_firstname, TO_BASE64( user_image ), user_sentence, level_id, admin
    FROM users
    EOD;
    $usersStmt = $db->query($sql);
    $users = $usersStmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

get_users();
/***********************************************************
fonction get_user
********************************************************** */
function get_info_from_id($data){
    $db = db_connect();

    $sql = <<<EOD
    SELECT user_lastname, user_firstname, user_sentence
    FROM users
    WHERE id = $data
    EOD;
    $infosStmt = $db->query($sql);
    $infos = $infosStmt->fetchAll(PDO::FETCH_ASSOC);
    return $infos;
}

/***********************************************************
fonction get_levels
********************************************************** */
function get_levels()
{
    $db = db_connect();

    $sql = <<<EOD
    SELECT level_id, level_name
    FROM levels;
    EOD;
    $levelsStmt = $db->query($sql);
    $levels = $levelsStmt->fetchAll(PDO::FETCH_ASSOC);
    return $levels;
}

get_levels();

/***********************************************************
fonction get_level_by_id
********************************************************** */
function get_level_by_id($data)
{
    $db = db_connect();

    $sql = <<<EOD
    SELECT level_name
    FROM levels
    WHERE level_id = $data
    EOD;
    $levelByIdsStmt = $db->query($sql);
    $levelById = $levelByIdsStmt->fetchAll(PDO::FETCH_ASSOC);
    return $levelById;
}

/***********************************************************
fonction delete_user
********************************************************** */

function delete_user($data){

    $db = db_connect();
    $sql = "DELETE FROM `users`
    WHERE `id` = $data";
    $db->exec($sql);
    $_GET['id']  = "undefined";
    header('Location: ../index.php');
    
}
if (isset($_GET['delete'])) {
    delete_user($_SESSION['id']);
}