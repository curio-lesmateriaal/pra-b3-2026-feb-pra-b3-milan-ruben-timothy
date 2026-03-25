<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <form action="../backend/taskController.php" method="POST">
    <input type="hidden" name="action" value="insert">
     <div class="form-group">
        <label for="titel">title</label>
        <input type="text" name="titel">
    </div>

     <label for="afdeling">Afdeling:</label>
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
        <label for="beschrijving">description</label>
        <textarea name="beschrijving"></textarea>
    </div>

     <div class="form-group">
        <label for="deadline">deadline</label>
        <input type="date" name="deadline">
    </div>
    
    <div class="form-group">
        <input type="submit" value="submit">
        <a class="discard_btn" href="index.php" class="cancel">Annuleren</a>
    </div>
    </form>

</body>
</html>