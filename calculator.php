<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <?php
    function add(int $a, int $b = 5): int
    {
        return $a + $b;
    }

    function substract(int $a, int $b): int
    {
        return $a - $b;
    }

    function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    function divide(int $a, int $b): float
    {
        if ($b === 0) {
            throw new Exception("La divion par zéro n'est pas autorisé.");
        }
        return $a / $b;
    }

    function modulo(int $a, int $b): int
    {
        return $a % $b;
    }

    function display(int $a, string $operation, int $b): void
    {
        switch ($operation) {
            case '+':
                echo "L'addition de $a et $b donne " . add($a, $b);
                break;
            case '-':
                echo "La soustraction de $a et $b donne " . substract($a, $b);
                break;
            case '*':
                echo "La multiplication de $a et $b donne " . multiply($a, $b);
                break;
            case '/':
                echo "La division de $a et $b donne " . divide($a, $b);
                break;
            case '%':
                echo "Le modulo de $a et $b donne " . modulo($a, $b);
                break;
            default:
                echo "L'opérateur n'est pas reconnu !";
                break;
        }
        echo ".<br>";
    }

    $integer1 = 12;
    $integer2 = 0;

    try {
        display($integer1, "+", $integer2);
        display($integer1, "-", $integer2);
        display($integer1, "*", $integer2);
        display($integer1, "/", $integer2);
        display($integer1, "%", $integer2);
    } catch (Exception $e) {
        echo $e;
    }

    ?>
</body>

</html>