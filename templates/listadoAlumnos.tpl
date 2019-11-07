{include file = "header.tpl"}
{* Usuario *}
{* Formulario de alumno *}
<form class="formS" method="POST" action="insertarAlumno">
<label>Datos del alumno</label>
<input class="nombre" name="nombre" type="text" placeholder="Nombre" value=""/>
<input class="apellido" name="apellido" type="text" placeholder="Apellido" value=""/>
<input class="DNI" name="DNI" type="number" placeholder="DNI" value=""/>
<input class="email" name="email" type="email" placeholder="Email" value=""/>
<input class="celular" name="celular" type="number" placeholder="Celular" value=""/>
<label>Facultad</label>
<select name="facultad">
    {foreach from=$facultades item=facultad }
        <option value="{$facultad->nombre_facultad}">{$facultad->nombre_facultad}</option>   
    {/foreach}
</select>
</form>
{foreach from=$alumnos item=alumno}
<li>{$alumno->nombre}:{$alumno->apellido}:{$alumno->DNI}:{$alumno->email}:{$alumno->celular}-<a href='alumno/{$alumno->id_alumno}'>Editar</a> - <a href='eliminarAlumno/{$facultad->id_facultad}'>Eliminar</a></li>
{/foreach}
{include file = "footer.tpl"}