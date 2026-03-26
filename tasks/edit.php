<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <?php require_once '../head.php'; ?>

</head>
<body class="tasks_index_body">

    <div class="container-edit">
        <h1>Taak aanpassen</h1>

        <?php
                $id = $_GET['id'];

                require_once '../backend/conn.php';

                $query = "SELECT * FROM taken WHERE id = :id";

                $statement = $conn->prepare($query);

                $statement->execute([
                    ':id' => $id
                ]);

                $taak = $statement->fetch(PDO::FETCH_ASSOC);
            
            ?>
        <form action="../backend/taskController.php" method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $id;?>">

            <label class="label-edit" for="titel">Titel:</label>
            <input type="text" id="titel" name="titel" placeholder="" value="<?php echo $taak['titel']; ?>" required>

            <label class="label-edit" for="beschrijving">Beschrijving:</label>
            <textarea id="beschrijving" name="beschrijving" placeholder="Beschrijf wat er moet gebeuren..." required><?php echo $taak['beschrijving'];?></textarea>

            <label class="label-edit" for="afdeling">Afdeling:</label>
            <select id="afdeling" name="afdeling" value="<?php echo $taak['afdeling']; ?>" required>
                <option value="">-- Kies afdeling --</option>
                <option value="personeel" <?php if($taak['afdeling']=="personeel") echo "selected"; ?>>Personeel</option>
                <option value="horeca" <?php if($taak['afdeling']=="horeca") echo "selected"; ?>>Horeca</option>
                <option value="techniek" <?php if($taak['afdeling']=="techniek") echo "selected"; ?>>Techniek</option>
                <option value="inkoop" <?php if($taak['afdeling']=="inkoop") echo "selected"; ?>>Inkoop</option>
                <option value="klantenservice" <?php if($taak['afdeling']=="klantenservice") echo "selected"; ?>>Klantenservice</option>
                <option value="groen" <?php if($taak['afdeling']=="groen") echo "selected"; ?>>Groen</option>
            </select>

            <label class="label-edit" for="status">Status:</label>
            <select name="status" id="status" value="<?php echo $taak['status']; ?>">
                <option value="">-- Status --</option>
                <option value="todo" <?php if($taak['status']=="todo") echo "selected"; ?>>ToDo</option>
                <option value="doing" <?php if($taak['status']=="doing") echo "selected"; ?>>Doing</option>
                <option value="done" <?php if($taak['status']=="done") echo "selected"; ?>>Done</option>

            </select>

            
            <label class="label-edit" for="deadline">Deadline:</label>
            <input class="deadline" type="date" id="deadline" name="deadline" value="<?php echo $taak['deadline']; ?>" required>

            <div class="buttons">
                <button class="submit_btn" type="submit">Opslaan</button>
                

                
            </form>
                <form action="<?php echo $base_url . '/backend/tasksController.php'; ?>" method="POST">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                    <div class="save_delete">
                        <input class="delete_btn" type="submit" value="Verwijderen" onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');">
                        <a class="discard_btn" href="index.php" class="cancel">Annuleren</a>
                    </div>
                        

                </form>
            </div>

  </div>
    
</body>
</html>