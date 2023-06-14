<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Formulaire</title>
</head>

<body>
    <div class="container">
        <h1>Mon super formulaire</h1>
        <?php
        $goodFirstName = false;
        $goodLastName = false;
        $goodAge = false;

        if ($_GET && strlen($_GET["firstName"]) > 3 && strlen($_GET["firstName"]) < 40) {
            $goodFirstName = true;
        }
        if ($_GET && strlen($_GET["lastName"]) > 3 && strlen($_GET["lastName"]) < 50) {
            $goodLastName = true;
        }
        if ($_GET && $_GET["age"] > 17 && $_GET["age"] < 99) {
            $goodAge = true;
        }
        if ($goodFirstName && $goodLastName && $goodAge) {
            echo "Bonjour {$_GET['civility']}  {$_GET['firstName']} {$_GET['lastName']} - Vous avez {$_GET['age']} ans.";
        } else { ?>
            <form>
                <label for="civility">Civilité</label>
                <select name="civility" id="civility" class="form-select" required>
                    <option value="Mme">Mme</option>
                    <option value="M.">M.</option>
                    <option value="">Autre</option>
                </select>
                <label for="firstName">Prénom</label>
                <input type="text" name="firstName" id="firstName" class="form-control" required minlength="3" maxlength="40" placeholder="Votre prénom">
                <?= $_GET && !$goodFirstName ? "<p class='text-danger'>Le prénom n'est pas valide !</p>" : "" ?>
                <label for="lastName">Nom</label>
                <input type="text" name="lastName" id="lastName" class="form-control" required minlength="3" maxlength="50" placeholder="Votre nom">
                <?= $_GET && !$goodLastName ? "<p class='text-danger'>Le nom n'est pas valide !</p>" : "" ?>
                <label for="age">Âge</label>
                <input type="number" name="age" id="age" class="form-control" required min="18" max="99" placeholder="Votre âge">
                <?= $_GET && !$goodAge ? "<p class='text-danger'>L'âge n'est pas valide !</p>" : "" ?>
                <input type="submit" value="Envoyer" class="mt-2 btn btn-primary">
            </form>
        <?php } ?>
    </div>
</body>

</html>