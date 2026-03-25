<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <h1>Formulier</h1>

    <form method="POST">

    <label>Titel</label><br>
    <input type="text" name="titel" required><br><br>

    <label>Beschrijving</label><br>
    <textarea name="beschrijving" required></textarea><br><br>

    <label>Afdeling</label><br>
        <select name="afdeling" required>
        <option value="">Kies afdeling</option>
        <option value="personeel">Personeel</option>
        <option value="horeca">Horeca</option>
        <option value="techniek">Techniek</option>
        <option value="inkoop">Inkoop</option>
        <option value="klantenservice">Klantenservice</option>
        <option value="groen">Groen</option>
    </select>

    <br><br>

    <button type="submit">Taak toevoegen</button>
    <button ><a href="index.php">Terug gaan</a></button>

    </form>

</body>
</html>