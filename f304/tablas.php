<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
 <!-- tablas -->
 <!-- tr son filas -->
<!-- td y th son seldas -->

 <table border="1">
    <tr>
        <td>columna1</td>
        <td>columna1</td>
    </tr>
    <tr>
        <td>fila2 columna1</td>
        <td>fila2 columna2</td>
    </tr>
 </table>

    <table border="1">
        <tr>
            <th>columna 1 con th</th>
            <th>columna 2 con th</th>
        </tr>
        <tr>
            <td>valor 1 fila 2</td>
            <td>valor 2 fila 2</td>
        </tr>
        </table>
        <!-- tablas con estructura -->
    <table border="1">
        <thead>
            <tr>
                <th>titulo 1</th>
                <th>titulo 2</th>
                <th>titulo 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>f2 c1</td>
                <td>f2 c2</td>
                <td>f2 c3</td>
            </tr>
            <tr>
                <td>f2 c4</td>
                <td>f2 c5</td>
                <td>f2 c6</td>
            </tr>
            <tr>
                <td>f2 c7</td>
                <td>f2 c8</td>
                <td>f2 c9</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>titulo 1</th>
                <th>titulo 2</th>
                <th>titulo 3</th>
            </tr>
        </tfoot>
        <caption>descripcion de la tabla</caption>
    </table>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <td>Jhons E</td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td>Garret S</td>
        </tr>
    </table>

<!-- colspan une las columnas -->
    <table border="1">
        <tr>
            <td>a</td>
            <td>b</td>
            <td>c</td>
        </tr>
        <tr>
            <td>c</td>
            <td colspan=2>ef</td>
        </tr>
    </table>

    <!-- rowspan une las filas -->
    <table border="1">
        <tr>
            <td rowspan="2">a</td>
            <td>b</td>
            <td>c</td>
        </tr>
        <tr>
            <td>d</td>
            <td>e</td>
        </tr>
    </table>

    </body>

</html>