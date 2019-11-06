<?php
/* Smarty version 3.1.33, created on 2019-11-06 22:06:09
  from 'C:\xampp\htdocs\Deportes\templates\facuForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc335c10b4556_20376467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e138f188e27feb0a58c77d712739ee30fe74325' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\facuForm.tpl',
      1 => 1573074367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc335c10b4556_20376467 (Smarty_Internal_Template $_smarty_tpl) {
?>    <form class="formS" method="POST" action="insertar">
        <label>Insertar nueva facultad</label>
        <input class= "facultad" name="facultad" type="text" placeholder="facultad"value="">
        <input class="sede" name="sede" type="text" placeholder="sede"value="">
        <input class="historia" name="historia" type="text" placeholder="historia"value="">
        <button type="submit" class="enviarDatos">Insertar</button>
    </form>
    <form class="formS" method="POST" action="editar">
        <label>Editar facultad</label>
        <input class= "facultad" name="facultad" type="text" placeholder="facultad"value="">
        <input class="sede" name="sede" type="text" placeholder="sede"value="">
        <input class="historia" name="historia" type="text" placeholder="historia"value="">
        <button type="submit" class="enviarDatos">Editar</button>
    </form>
    

<?php }
}
