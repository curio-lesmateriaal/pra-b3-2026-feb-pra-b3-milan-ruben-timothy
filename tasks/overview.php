<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php require_once '../header.php'; ?>

    <div class="back-to-tasks">
        <a href="index.php">>Terug naar taken overzicht</a>
    </div>
    <div class="wrapper">
        <div class="overview_h1">
            <h1>Taken met status To-Do & Doing</h1>
        </div>
    </div>

    <div class="table_container">
        <?php
        require_once '../backend/conn.php';
        $query = "SELECT * FROM taken WHERE status != 'done' ORDER BY deadline ASC";
        $statement = $conn->prepare($query);
        $statement->execute();
        $taken = $statement->fetchAll(PDO::FETCH_ASSOC);


        ?>

        <table>
            <tr>
                <th>Titel</th>
                <th>Afdeling</th>
                <th>Status</th>
                <th>Deadline</th>
                <th>Edit</th>


            </tr>
            <?php foreach ($taken as $taak): ?>
                <tr>
                    <td><?php echo $taak['titel']; ?></td>
                    <td><?php echo $taak['afdeling']; ?></td>
                    <td><?php echo $taak['status']; ?></td>
                    <td><?php echo $taak['deadline']; ?></td>
                    <td><a href="edit.php?id=<?php echo $taak['id']; ?>">aanpassen</a></td>

                </tr>


            <?php endforeach; ?>
        </table>
    </div>
</body>