{* Administrador *}
{* Formulario para insertar, editar y eliminar facultades *}
<form class="formS" method="POST" action="insertar">
     <label>Insertar nueva facultad</label>
    <input class= "facultad" name="facultad" type="text" placeholder="facultad"value=""/>
    <input class="sede" name="sede" type="text" placeholder="sede"value=""/>
    <input class="historia" name="historia" type="text" placeholder="historia"value=""/>
    <button type="submit" class="enviarDatos">Insertar</button>
</form>
{foreach from=$facultades item=facultad}
<li>{$facultad->nombre_facultad}:{$facultad->sede}-<a href='editar/{$facultad->id_facultad}'>Editar</a> - <a href='eliminar/{$facultad->id_facultad}'>Eliminar</a></li>
{/foreach}
