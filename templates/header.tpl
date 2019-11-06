<!DOCTYPE html>
    <html lang "es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=devicewidth", initial-scale="1.0">
        {*Estilo de los logos de las redes sociales*}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{$URL}css/style.css">
        <title>{$titulo}</title>    
    </head>

    <body>
        <header>
        <h1 class="titulo">Olimpiadas</h1>
        <div class= "log">
            <a class ="entrar" href="{$URL}login"><p>LOGIN</p></a>
            <a class ="salir"href="{$URL}logout"><p>LOGOUT</p></a>
        </div>
        {* <img class="logo" src="../images/logodeporte.jpg" alt="logo de deportes de la unicen" /> *}
        </header>
         <h2 id = "menu">Menú</h2>
        <nav class = nonav>
            <ul>
            <li><a href="{$URL_OLIMPIADAS}">Home</a></li>
            <li><a href="{$URL}Agronomía">Agronom&iacutea</a></li>
            <li><a href="../site/arte.html">Arte</a></li>
            <li><a href="../site/derecho.html">Derecho</a></li>
            <li><a href="../site/economicas.html">Econ&oacutemicas</a></li>
            <li><a href="../site/exactas.html">Exactas</a></li>
            <li><a href="../site/humanas.html">Humanas</a></li>
            <li><a href="../site/ingenieria.html">Ingenier&iacutea</a></li>
            <li><a href="../site/quequen.html">Quequ&eacuten</a></li>
            <li><a href="../site/salud.html">Salud</a></li>
            <li><a href="../site/sociales.html">Sociales</a></li>
            <li><a href="{$URL}Veterinarias">Veterinarias</a></li>
            </ul>
        </nav>
    
    
      