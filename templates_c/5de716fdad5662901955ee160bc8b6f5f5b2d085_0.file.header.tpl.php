<?php
/* Smarty version 3.1.33, created on 2019-11-06 19:05:30
  from 'C:\xampp\htdocs\Deportes\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc30b6a1d7229_37519268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de716fdad5662901955ee160bc8b6f5f5b2d085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\header.tpl',
      1 => 1573063527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc30b6a1d7229_37519268 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang "es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=devicewidth", initial-scale="1.0">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
css/style.css">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>    
    </head>

    <body>
        <header>
        <h1 class="titulo">Olimpiadas</h1>
        <div class= "log">
            <a class ="entrar" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
login"><p>LOGIN</p></a>
            <a class ="salir"href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
logout"><p>LOGOUT</p></a>
        </div>
                </header>
         <h2 id = "menu">Menú</h2>
        <nav class = nonav>
            <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL_OLIMPIADAS']->value;?>
">Home</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
Agronomía">Agronom&iacutea</a></li>
            <li><a href="../site/arte.html">Arte</a></li>
            <li><a href="../site/derecho.html">Derecho</a></li>
            <li><a href="../site/economicas.html">Econ&oacutemicas</a></li>
            <li><a href="../site/exactas.html">Exactas</a></li>
            <li><a href="../site/humanas.html">Humanas</a></li>
            <li><a href="../site/ingenieria.html">Ingenier&iacutea</a></li>
            <li><a href="../site/quequen.html">Quequ&eacuten</a></li>
            <li><a href="../site/salud.html">Salud</a></li>
            <li><a href="../site/sociales.html">Sociales</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
Veterinarias">Veterinarias</a></li>
            </ul>
        </nav>
    
    
      <?php }
}
