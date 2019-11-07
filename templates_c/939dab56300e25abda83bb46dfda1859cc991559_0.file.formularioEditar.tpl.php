<?php
/* Smarty version 3.1.33, created on 2019-11-07 03:07:25
  from 'C:\xampp\htdocs\Deportes\templates\formularioEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc37c5db23688_90506994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939dab56300e25abda83bb46dfda1859cc991559' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\formularioEditar.tpl',
      1 => 1573092285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc37c5db23688_90506994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formulario" method="POST" action="editar">
     <label>Editar la facultad seleccionada</label>
    <input class= "facultad" name="facultad" type="text" placeholder="facultad"value=""/>
    <input class="sede" name="sede" type="text" placeholder="sede"value=""/>
    <input class="historia" name="historia" type="text" placeholder="historia"value=""/>
    <button type="submit" class="enviarDatos">Editar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
