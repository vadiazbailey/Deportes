<?php
/* Smarty version 3.1.33, created on 2019-11-22 21:14:30
  from 'C:\xampp\htdocs\DeportesUnicen\templates\verIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd841a6d5d3a0_48892614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93e3e0faf90b97902d80a807e72bbe2fc328f69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DeportesUnicen\\templates\\verIndex.tpl',
      1 => 1573222805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:facuForm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd841a6d5d3a0_48892614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_SESSION['userId'])) {?>    
    <?php $_smarty_tpl->_subTemplateRender("file:facuForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php }?>

<section>
  <div class="leyenda">
            <article class="history">
                <h3>Historia de las Olimpiadas</h3>
                <p>En el a&ntildeo 1983, cuando termin&oacute el proceso militar, naci&oacute el proyecto de las Olimpiadas por iniciativa
                    de los deportistas de Veterinarias y de Econ&oacutemicas, quienes llevaron este planteo a la secretar&iacutea de
                    deportes con el fin de incentivar a todas las facultades de las sedes de UNICEN a la actividad
                    deportiva, siendo la ciudad de Tandil el n&uacutecleo para desarrollar la misma.</p>
                <p>Con todo este movimiento surgi&oacute la primera mascota de las Olimpiadas Intercede llamada “Piada”, a
                    quien le di&oacute su origen la secretaria de deporte de ese momento llamada Carolina.</p>
                <p>Los primeros a&ntildeos estuvieron abocados principalmente a deportes, donde se practicaba canotaje, tiro y
                    las pruebas de atletismo, que se desarrollaban en las pistas con salto en alto y largo. Las
                    distintas alternativas se fueron adaptando a la actualidad para una mayor integraci&oacuten de los
                    estudiantes, quienes mediante su voto fueron generando este cambio. </p>
                <p>Esta organizaci&oacuten se sostuvo los primeros a&ntildeos con el trabajo de los profesores, que manten&iacutean toda
                    esta estructura con las recaudaciones que se hac&iacutean a trav&eacutes de los bailes ol&iacutempicos en el Club
                    Independiente. </p>
                <p>Al pasar los a&ntildeos, este evento empez&oacute a tomar tal magnitud que era imposible para la Secretar&iacutea de
                    Deportes sostener su estructura solamente con los fondos originados de los bailes ol&iacutempicos. Cuando
                    la Universidad toma conciencia de esta situaci&oacuten busca evitar que se pierda el espacio generado por
                    los estudiantes, consider&aacutendola de inter&eacutes universitario, pasando la misma a ser parte del
                    presupuesto de la UNICEN para su financiaci&oacuten. </p>
            </article>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
