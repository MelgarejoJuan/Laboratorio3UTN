<!DOCTYPE html>

<head>
  <title>Ejercicio 3 - Muestreo de Variables del Servidor</title>
  <meta charset="UTF-8" />
</head>

<html>
  <main>

    <?php

    echo "<h1>Variables del Servidor</h1>";
    echo "<table style='border: solid; border-collapse: collapse'>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>SERVER_ADDR</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["SERVER_ADDR"] . "</td>
        </tr>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>SERVER_PORT</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["SERVER_PORT"] . "</td>
        </tr>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>SERVER_NAME</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["SERVER_NAME"] . "</td>
        </tr>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>DOCUMENT_ROOT</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["DOCUMENT_ROOT"] . "</td>
        </tr>
    </table>";

    echo "<h1>Variables del Cliente</h1>";
    echo "<table style='border: solid; border-collapse: collapse'>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>REMOTE_ADDR</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["REMOTE_ADDR"] . "</td>
        </tr>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>REMOTE_PORT</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["REMOTE_PORT"] . "</td>
        </tr>
    </table>";

    echo "<h1>Variables de Requerimiento</h1>";
    echo "<table style='border: solid; border-collapse: collapse'>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>SCRIPT_NAME</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["SCRIPT_NAME"] . "</td>
        </tr>
        <tr>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>REQUEST_METHOD</td>
            <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $_SERVER["REQUEST_METHOD"] . "</td>
        </tr>
    </table>";

    echo "<h1>Todas las Variables</h1>";
    echo "<ul>";
    foreach($_SERVER as $key_name => $key_value){

        echo "<li>" . $key_name . " : " . $key_value . "</li>";

    };
    echo "</ul>";

    ?>

  </main>
</html>