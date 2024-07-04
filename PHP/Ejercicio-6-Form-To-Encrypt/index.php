<!DOCTYPE html>

<head>
  <title>Ejercicio 6 - Form to Encrypt</title>
  <meta charset="UTF-8" />

  <style>

    *{
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0%;
        padding: 0%;
    }

    html, body{
        width: 100%;
        text-align: center;
    }

  </style>

</head>

<html>
  <main>

    <?php

    if(isset($_GET['code'])){

      echo "<h2>Clave: " . $_GET['code'] . "</h2>";
      echo "<h3>Clave encriptada en md5 (128 bits o 16 pares hexadecimales: " . md5($_GET['code']) . "</h3>";
      echo "<h2>Clave: " . $_GET['code'] . "</h2>";
      echo "<h3>Clave encriptada en sha1 (160 bits o 20 pares hexadecimales: " . sha1($_GET['code']) . "</h3>";

    }else{

    echo "<form action='' method='get'>
  
    <label for='code'>Ingrese la clave a encriptar</label>
    <br>
    <br>
    <input type='text' name='code'>
    <br>
    <br>
    <button type='submit'>Obtener encriptación</button>";

    }

    ?>

  </main>
</html>