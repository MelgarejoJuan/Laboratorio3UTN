<?php
include ('../controlador-sesion.php')
?>
<!DOCTYPE html>

<head>
  <title>Ejercicio 2 - Tabla Variable con Arreglo de Objetos</title>
  <meta charset="UTF-8" />
  <script src="../jquery-3.7.1.js"></script>  
  <script src="ejercicio-final.js"></script>
  <link rel="stylesheet" href="./style.css">

</head>

<html>

    <body>

        <section id="fondo">
        <header>

            <h1>Componentes</h1>
            <div id="div-orden">
            <label for="orden">Orden</label>
            <br>
            <input type="text" name="orden" id="orden">
            </div>
            <button id="carga">Cargar Datos</button>
            <button id="vaciar">Vaciar Datos</button>
            <button id="limpiar">Limpiar Filtros</button>
            <button id="alta">Alta Registro</button>

        </header>

        <main>

            <table>

                <thead>
                    <tr>
                    <th id="boton-num-serie">Numero de serie</th>
                    <th id="boton-detalle">Detalle</th>
                    <th id="boton-costo">Costo de Componente</th>
                    <th id="boton-mano-obra">Costo Mano de Obra</th>
                    <th id="boton-fecha">Fecha de Alta</th>
                    <th id="boton-marca">Marca</th>
                    <th id="boton-pdf">PDF</th>
                    <th id="boton-modif">Modificar</th>
                    <th id="boton-baja">Baja</th>
                    </tr>
                    <tr>
                    <th><input name="filtro_num_serie" type="number" id="filtro_num_serie"></th>
                    <th><input name="filtro_detalle" type="text" id="filtro_detalle"></th>
                    <th><input name="filtro_costo" type="number" id="filtro_costo"></th>
                    <th><input name="filtro_mano_obra" type="number" id="filtro_mano_obra"></th>
                    <th><input name="filtro_fecha" type="date" id="filtro_fecha"></th>
                    <th><select name="filtro_marca" id="filtro_marca" selected=""></select></th>
                    <th></th>
                    <th></th>
                    <th></th>   
                    </tr>
                </thead>

                <div class="cont-tabla">

                <tbody id="tabla">


                </tbody>

                </div>

            </table>

            
        </main>

        <footer>

            <h1>Pie De Página</h1>

        </footer>
        </section>

    </body>

<!-- FORMULARIO DE ALTA -->    

    <div class="apagado" id="modal-alta">

        <div class="barra-sup">

            <h1>Alta de Componente</h1>

            <div class="salir">
                <h1>X</h1>
            </div>

        </div>

        <form action="" method="post" id="form-alta">

            <div class="cont">
            <label for="numSerie">Número de serie:</label>
            <br>
            <br>
            <input type="text" name="numSerie" id="numSerie" required>
            </div>

            <div class="cont">
            <label for="detalle">Detalle:</label>
            <br>
            <br>
            <input type="text" name="detalle" id="detalle" required>
            </div>

            <div class="cont">
            <label for="stock">Costo de Componente:</label>
            <br>
            <br>
            <input type="number" name="costoComp" id="costoComp" required>
            </div>

            <div class="cont">
            <label for="stock">Costo de Mano de Obra:</label>
            <br>
            <br>
            <input type="number" name="costoManoObra" id="costoManoObra" required>
            </div>

            <div class="cont">
            <label for="codMarca">Marca</label>
            <br>
            <br>
            <select name="codMarca" id="codMarca-alta" required></select>
            </div>

            <div class="cont">
            <label for="fecha">Fecha de Alta</label>
            <br>
            <br>
            <input type="date" name="fechaAlta" id="fechaAlta" required>
            </div>

            <div class="cont">
            <label for="stock">PDF Asociado:</label>
            <br>
            <br>
            <input type="file" name="pdf" id="pdf" required>
            </div>

            <div class="cont">
            <button type="button" id="submit-alta">Enviar</button>
            </div>

        </form>

    </div>

<!--FORMULARIO DE MODIFICACION-->

<div class="apagado" id="modal-modif" >

    <div class="barra-sup">

        <h1>Modificación de Componente</h1>

        <div class="salir">
            <h1>X</h1>
        </div>

    </div>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="cont">
            <label for="numSerie-modi">Número de serie:</label>
            <br>
            <br>
            <input type="text" name="numSerie-modi" id="numSerie-modi" required>
        </div>

        <div class="cont">
        <label for="detalle">Detalle:</label>
        <br>
        <br>
        <input type="text" name="detalle-modi" id="detalle-modi" required>
        </div>

        <div class="cont">
        <label for="stock">Costo de Componente:</label>
        <br>
        <br>
        <input type="number" name="costoComp-modi" id="costoComp-modi" required>
        </div>

        <div class="cont">
        <label for="stock">Costo de Mano de Obra:</label>
        <br>
        <br>
        <input type="number" name="costoManoObra-modi" id="costoManoObra-modi" required>
        </div>

        <div class="cont">
        <label for="codMarca">Marca</label>
        <br>
        <br>
        <select name="codMarca-modi" id="codMarca-modi" required></select>
        </div>

        <div class="cont">
        <label for="fecha">Fecha de Alta</label>
        <br>
        <br>
        <input type="date" name="fechaAlta-modi" id="fechaAlta-modi" required>
        </div>

        <div class="cont">
        <label for="pdf">PDF Asociado:</label>
        <br>
        <br>
        <input type="file" name="documentoPdf" id="pdf" required>
        </div>

        <div class="cont">
        <button type="button" id="submit-modif">Enviar</button>
        </div>

    </form>

</div>

<!--VENTANA DE ESTADO-->

<div class="apagado" id="modal-estado">

    <div class="barra-sup">

        <h1>Modificación de Componente</h1>

        <div class="salir">
            <h1>X</h1>
        </div>

    </div>


</div>


</html>

