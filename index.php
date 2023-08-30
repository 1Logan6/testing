<!DOCTYPE html>
<?php require('config.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>

    <h1>Logan Alfonso Rivera Flores</h1>

    <div class="nav">
        <ul class="enlaces">
            <li><a href="index.html" class="texto_lista">Hacia index.html</a></li>
            <li><a href="formulario.php" class="texto_lista">Hacia formulario.html</a></li>
        </ul>
    </div>

    <section class="acerca_de_mi">
        <h2>Acerca de mi</h2>
        <p>Soy un estudiante de informatica que le gusta el gym y los anabólicos</p>
    </section>

    <form action="store.php" method="post">

        <!-- <label name="nombre">Nombre</label>
        <input type="text" required placeholder="Juan">

        <label name="correo">Correo electrónico</label>
        <input type="email" required placeholder="juan3@gmail.com"> -->

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required placeholder="Juan">

        <label for="correo">Correo electrónico</label>
        <input type="email" name="correo" required placeholder="juan3@gmail.com">

        <input class="boton_enviar" type="submit" value="Enviar formulario">

    </form>

    <?php

        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Configura los resultados como un arreglo asociativo
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // $stmt->fetchAll() Obtiene el arreglo asociativo
        echo "<ul>";
        echo "<p>Si</p>";
        foreach ($stmt->fetchAll() as $row) {
            echo "<li>" . $row['id'] . " - " . $row['nombre'] . " " . $row['correo'] . "</li>";
        }
        echo "</ul>";

    ?>

    <div class="footer">

        <section class="contacto">
            <h3>Contáctame por:</h3>
            <ul class="enlaces">
                <li><a href="https://www.instagram.com/cbum/" class="texto_lista">Instagram</a></li>
                <li><a href="https://www.youtube.com/channel/UC4514FwdRy5gI6CdC9GPb0w" class="texto_lista">Youtube</a></li>
            </ul>
        </section>

        <a href="mailto:elMono@gmail.com" class="correo">Mandar un correo</a>

    </div>

</body>
</html>