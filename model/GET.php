<?php
require_once "dbconnect.php";

function getCategories($pdo){
    $req= $pdo->query('select prod_type from categories');
    $req->execute(array());
    $result = $req->fetchall(PDO::FETCH_NUM);
    return $result;
}



function getNews($pdo){
    $req= $pdo->query('select HeadNews, News from News');
    //$req->execute(array());
    $result = $req->fetchall(PDO::FETCH_NUM);
    return $result;
}



function getContacts($pdo){
    $req= $pdo->query('select facebook, twitter, linkedin, googlep from Bureau');
    //$req->execute(array());
    $result = $req->fetchall(PDO::FETCH_NUM);
    return $result;
}


function getNewsMails($pdo){
    $req= $pdo->query('select mail from NewsLetter');
    //$req->execute(array());
    $result = $req->fetchall(PDO::FETCH_NUM);
    return $result;
}