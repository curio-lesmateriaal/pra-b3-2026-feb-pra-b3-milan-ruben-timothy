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

  require_once 'conn.php';

  $query = "INSERT INTO taken ( titel, beschrijving, afdeling, deadline) VALUES ( :titel, :beschrijving, :afdeling, :deadline)";

  $statement = $conn->prepare($query);

     $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":afdeling" => $afdeling,
        ":deadline" => $deadline,
    ]);
}

    if($action == "update"){

    $titel = $_POST['titel'];
    $beschrijving = $_POST['beschrijving'];
    $afdeling = $_POST['afdeling'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline'];
    $id = $_POST['id'];


    require_once 'conn.php';

    $query = "UPDATE taken SET titel = :titel, beschrijving = :beschrijving, afdeling = :afdeling, status = :status, deadline = :deadline WHERE id = :id";

    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":afdeling" => $afdeling,
        ":status" => $status,
        ":deadline" => $deadline,
        ":id" => $id

    ]);
}

if($action == "delete"){

    $id = $_POST['id'];
    require_once 'conn.php';
    
    $query = "DELETE FROM taken WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id

    ]);
}
    header("location: ../tasks/index.php");
    exit();
