<?php

$action = $_POST['action']?? null;
if($action == "insert")
{


$titel = $_POST['titel'];
$beschrijving= $_POST['beschrijving'];
$afdeling = $_POST['afdeling'];
$deadline = $_POST['deadline'];

$titel=$_POST['titel'];
if(empty($titel)){
    $errors[]="title cannot be empty";
}

$beschrijving=$_POST['beschrijving'];
if(empty($beschrijving)){
    $errors[]="description cannot be empty";
}

$afdeling=$_POST['afdeling'];
if(empty($afdeling)){
    $errors[]="department cannot be empty";
}

$deadline=$_POST['deadline'];
if(empty($titel)){
    $errors[]="Date cannot be empty";
}

if(isset($errors))
{
    var_dump($errors);
    die();
}

if(!empty($errors)){
    var_dump($errors);
    die();
}

  require_once  __DIR__ . '/../backend/conn.php';

  $query = "INSERT INTO taken ( titel, beschrijving, afdeling, deadline) VALUES ( :titel, :beschrijving, :afdeling, :deadline)";

  $statement = $conn->prepare($query);

     $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":afdeling" => $afdeling,
        ":deadline" => $deadline,
    ]);

    header("location: ../tasks/index.php");
    exit();
}