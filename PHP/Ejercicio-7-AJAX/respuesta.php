<?php

sleep(3);

    $code = $_GET['code'];
    echo "<h4>Clave: " . $code . "</h4>";
    echo "<p>Clave encriptada en md5 (128 bits o 16 pares hexadecimales: " . md5($code) . "</p>";
    echo "<h4>Clave: " . $code . "</h4>";
    echo "<p>Clave encriptada en sha1 (160 bits o 20 pares hexadecimales: " . sha1($code) . "</p>";



?>