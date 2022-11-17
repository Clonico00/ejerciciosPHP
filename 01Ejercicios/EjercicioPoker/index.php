<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Poker</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="submit" value="Tirar" name="lanzar">
</form>
<br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="submit" value="Rendirse" name="rendirse">
</form>
</body>
</html>

<?php
require_once 'dado.php';

use Dado\Dado;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    if (isset($_POST['lanzar'])) {
        if (!isset($_SESSION['tiradas'])) {
            $_SESSION['tiradas'] = 0;
        } else if ($_SESSION['tiradas'] == 5) {
            foreach ($_SESSION['dado'] as $valor) {
                echo $valor . "<br>";
            }
            echo "Has tirado 5 veces, no puedes tirar mas";
        } else {
            $_SESSION['tiradas']++;
            $dado = new Dado();
            $dado->tira();
            $_SESSION['dado'][] = $dado->nombreFigura();
            $_SESSION['dadoValor'][] = $dado->getValor();

            echo "Tirada: " . $_SESSION['tiradas'] . "<br>";
            foreach ($_SESSION['dado'] as $valor) {
                echo $valor . "<br>";
            }
        }

    } else if (isset($_POST['rendirse'])) {
        if ($_SESSION['tiradas'] == 0 ) {
            echo "No has tirado nada";
        } else if ($_SESSION['tiradas'] == 5) {
            foreach ($_SESSION['dado'] as $valor) {
                echo $valor . "<br>";
            }
            if ($_SESSION['dadoValor'][0] == 2 || $_SESSION['dadoValor'][1] == 2 || $_SESSION['dadoValor'][2] == 2 || $_SESSION['dadoValor'][3] == 2 || $_SESSION['dadoValor'][4] == 2) {
                echo "Has sacado Pareja";
            } else if ($_SESSION['dadoValor'][0] == 3 || $_SESSION['dadoValor'][1] == 3 || $_SESSION['dadoValor'][2] == 3 || $_SESSION['dadoValor'][3] == 3 || $_SESSION['dadoValor'][4] == 3) {
                echo "Has sacado Trio";
            } else if ($_SESSION['dadoValor'][0] == 4 || $_SESSION['dadoValor'][1] == 4 || $_SESSION['dadoValor'][2] == 4 || $_SESSION['dadoValor'][3] == 4 || $_SESSION['dadoValor'][4] == 4) {
                echo "Has sacado Poker";
            } else if ($_SESSION['dadoValor'][0] == 5 || $_SESSION['dadoValor'][1] == 5 || $_SESSION['dadoValor'][2] == 5 || $_SESSION['dadoValor'][3] == 5 || $_SESSION['dadoValor'][4] == 5) {
                echo "Has sacado Full";
            } else if ($_SESSION['dadoValor'][0] == 6 || $_SESSION['dadoValor'][1] == 6 || $_SESSION['dadoValor'][2] == 6 || $_SESSION['dadoValor'][3] == 6 || $_SESSION['dadoValor'][4] == 6) {
                echo "Has sacado Escalera";
            } else if ($_SESSION['dadoValor'][0] == 7 || $_SESSION['dadoValor'][1] == 7 || $_SESSION['dadoValor'][2] == 7 || $_SESSION['dadoValor'][3] == 7 || $_SESSION['dadoValor'][4] == 7) {
                echo "Has sacado Escalera Color";
            } else if ($_SESSION['dadoValor'][0] == 8 || $_SESSION['dadoValor'][1] == 8 || $_SESSION['dadoValor'][2] == 8 || $_SESSION['dadoValor'][3] == 8 || $_SESSION['dadoValor'][4] == 8) {
                echo "Has sacado Escalera Real";
            } else if ($_SESSION['dadoValor'][0] == 9 || $_SESSION['dadoValor'][1] == 9 || $_SESSION['dadoValor'][2] == 9 || $_SESSION['dadoValor'][3] == 9 || $_SESSION['dadoValor'][4] == 9) {
                echo "Has sacado Escalera Color Real";
            } else {
                echo "No has sacado nada";
            }
        }
        session_destroy();
    }


}
?>



