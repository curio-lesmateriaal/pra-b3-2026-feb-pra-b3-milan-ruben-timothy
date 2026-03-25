<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php require_once '../header.php'; ?>

    <div class="container">


    </div>

    <?php 
        require_once  __DIR__ . '/../backend/conn.php';

        $query = "SELECT * FROM taken ";

        $statement = $conn->prepare($query);
        $statement->execute();
        $taken = $statement->fetchAll(PDO::FETCH_ASSOC);

        $deadlines = array_column($taken, 'deadline');

        array_multisort($deadlines, SORT_ASC, $taken);
        ?> 

            <div class="takenoverzicht-links">
                <a class="takenoverzicht-link" href="create.php">> Klik hier om een taak aan te maken</a>
                <a class="takenoverzicht-link" href="done.php">> Klik hier om de Done page te bezoeken</a>
                <a class="takenoverzicht-link" href="unfinished.php">> Klik hier om de unfinished tasks te zien</a>
            </div>
    <table>
            <tr>

                <th>Titel</th>
                <th>Description</th>
                <th>Department</th>
                <th>Status</th>
                <th>deadline</th>

            </tr>
            <?php foreach($taken as $taak):   ?>
            <tr>

            <td> <?php echo $taak['titel']; ?></td>
            <td> <?php echo $taak['beschrijving']; ?></td>
            <td> <?php echo $taak['afdeling']; ?></td>
            <td> <?php echo $taak['status']; ?></td>
            <td> <?php echo $taak['deadline']; ?></td>  
            <td><form action="../backend/taskControllers.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $taak['id']; ?>">

            </form>
            </td>

           
            </tr>
            <?php endforeach; ?>
        </table>
</body>

</html>
