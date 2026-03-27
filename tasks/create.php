<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body class="tasks_index_body">
    <div class="container-create">
        <h1>Nieuw taak aanmaken</h1>
        <form action="../backend/taskController.php" method="POST">
            <input type="hidden" name="action" value="insert">
            <div class="form-group">
                <label class="label-create" for="titel">title</label>
                <input type="text" name="titel">
            </div>

            <label class="label-create" for="afdeling">Afdeling:</label>
            <select id="afdeling" name="afdeling" required>
                <option value="">-- Kies afdeling --</option>
                <option value="personeel">Personeel</option>
                <option value="horeca">Horeca</option>
                <option value="techniek">Techniek</option>
                <option value="inkoop">Inkoop</option>
                <option value="klantenservice">Klantenservice</option>
                <option value="groen">Groen</option>
            </select>

            <div class="form-group">
                <label class="label-create" for="beschrijving">description</label>
                <textarea name="beschrijving"></textarea>
            </div>

            <div class="form-group">
                <label class="label-create" for="deadline">deadline</label>
                <input type="date" name="deadline">
            </div>

            <div class="form-group">
                
                <button class="submit_btn" type="submit">Opslaan</button>

                <a class="discard_btn" href="index.php" class="cancel">Annuleren</a>
            </div>    
        </form>
    </div>
    

</body>
</html>