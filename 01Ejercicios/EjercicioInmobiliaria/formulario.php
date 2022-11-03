<!DOCTYPE html>
<html>

<head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <?php
    $array[] = "";
    ?>
    <h1>Inserccion de vivienda</h1>
    Estos son los datos introducidos:
    <br>
    <ul>
        <li>Tipo: <?= $_POST["tipo"] . "<br>" ?></li>
        <li>Zona: <?= $_POST["zona"] . "<br>" ?></li>
        <?php
        $array[] = $_POST["tipo"];
        $array[] = $_POST["zona"];

        if (!isset($_POST['submit'])) {
            if (!empty($_POST["direccion"]) and preg_match("/^[a-zA-Z0-9]+$/", $_POST["direccion"])) {
                echo "<li>Direccion: " . $_POST["direccion"] . "</li>";
                $array[] = $_POST["direccion"];
            } else {
                echo "<li style='color : red'>Direccion: ERROR escriba una direccion correcta</li>";
            }
        }
        ?>
        <?php
        if (!isset($_POST['submit'])) {
            if (!empty($_POST["numeroDormitorios"])) {
                echo "<li>Numero de dormitorios: " . $_POST["numeroDormitorios"] . "</li>";
                $array[] = $_POST["numeroDormitorios"];
            } else {
                echo "<li style='color : red'>Numero de dormitorios: ERROR eliga un numero de dormitorios</li>";
            }
        }
        ?>
        <?php
        if (!isset($_POST['submit'])) {
            if (!empty($_POST["precio"])) {
                if (filter_var($_POST["precio"], FILTER_VALIDATE_INT) or filter_var($_POST["precio"], FILTER_VALIDATE_FLOAT)) {
                    echo "<li>Precio: " . $_POST["precio"] . "</li>";
                } else {
                    echo "<li style='color : red'>Precio: ERROR el precio debe ser un numero</li>";
                }
            } else {
                echo "<li style='color : red'>Precio: ERROR escriba un precio</li>";
            }
        }
        ?>
        <?php
        if (!isset($_POST['submit'])) {
            if (!empty($_POST["metros"])) {
                if (filter_var($_POST["metros"], FILTER_VALIDATE_INT) or filter_var($_POST["metros"], FILTER_VALIDATE_FLOAT)) {
                    echo "<li>Tamaño: " . $_POST["metros"] . "</li>";
                    $array[] = $_POST["metros"];
                } else {
                    echo "<li style='color : red'>Tamaño: ERROR el tamaño debe ser un numero</li>";
                }
            } else {
                echo "<li style='color : red'>Tamaño: ERROR escriba un tamaño</li>";
            }
        }

        ?>
        <li>Extras: <?php
                    if (!isset($_POST['submit'])) {
                        if (!empty($_POST["extras"])) {
                            foreach ($_POST["extras"] as $selected) {
                                echo " $selected ";
                                $array[] = $selected . " ";
                            }
                        } else {
                            echo "No hay extras";
                        }
                    }
                    ?></li>
        <?php
        if (!isset($_POST['submit'])) {
            if (!empty($_FILES['foto']['size'] < 100000)) {
                $nombreDirectorio = "fotos/";
                $nombreFichero = $_FILES['foto']['name'];

                $nombreCompleto = $nombreDirectorio . $nombreFichero;
                if (is_file($nombreCompleto)) {
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                }
                move_uploaded_file($_FILES["foto"]["tmp_name"], $nombreDirectorio . $nombreFichero);

                echo "<li>Foto: <a href='fotos/$nombreFichero'> " . $nombreFichero . "</a></li>";
                $array[] = $_FILES['foto']['name'];
            } else {
                echo "<li style='color : red'>Foto: ERROR eliga una foto con un tamaño menor</li>";
            }
        }

        ?>
        <li>Observaciones: <?= $_POST["comentarios"] . "<br>" ?></li>
        <?php
        if (!empty($_POST["metros"]) and !empty($_POST["precio"])) {
            if (
                filter_var($_POST["metros"], FILTER_VALIDATE_INT) or filter_var($_POST["metros"], FILTER_VALIDATE_FLOAT)
                and filter_var($_POST["precio"], FILTER_VALIDATE_INT) or filter_var($_POST["precio"], FILTER_VALIDATE_FLOAT)
            ) {
                $zona = $_POST["zona"];
                $metros = $_POST["metros"];
                $precio = $_POST["precio"];
                $beneficio = 0;
                if ($zona == "Centro") {
                    if ($metros < 100) {
                        $beneficio = $precio * 0.3;
                    } else {
                        $beneficio = $precio * 0.35;
                    }
                } elseif ($zona == "Zaidín") {
                    if ($metros < 100) {
                        $beneficio = $precio * 0.25;
                    } else {
                        $beneficio = $precio * 0.28;
                    }
                } elseif ($zona == "Chana") {
                    if ($metros < 100) {
                        $beneficio = $precio * 0.22;
                    } else {
                        $beneficio = $precio * 0.25;
                    }
                } elseif ($zona == "Albaicín") {
                    if ($metros < 100) {
                        $beneficio = $precio * 0.2;
                    } else {
                        $beneficio = $precio * 0.35;
                    }
                } elseif ($zona == "Sacromonte") {
                    if ($metros < 100) {
                        $beneficio = $precio * 0.22;
                    } else {
                        $beneficio = $precio * 0.25;
                    }
                } elseif ($zona == "Realejo") {
                    if ($metros < 100) {
                        $beneficio = $precio * 0.25;
                    } else {
                        $beneficio = $precio * 0.28;
                    }
                }
            } else {
                $beneficio = 0;
            }
        } else {
            $beneficio = 0;
        }

        echo "<li>Beneficio: " . $beneficio . "</li>";
        $array[] = $_POST["comentarios"];
        $file = fopen("datosFormulario.txt", "a");
        if (count($array) >= 7) {
            foreach ($array as $line) {
                fwrite($file, $line . PHP_EOL);
            }
            fclose($file);
        } else {
            echo "<li style='color : red'>ERROR no se ha podido escribir en el fichero</li>";
        }
        ?>

    </ul>
    <label onclick="location.href='index.html'">[Insertar otra vivienda]</label>
</body>

</html>