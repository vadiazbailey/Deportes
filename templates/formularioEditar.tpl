{include file = "header.tpl"}
<form class="formulario" method="POST" action="editar">
     <label>Editar la facultad seleccionada</label>
    <input class= "facultad" name="facultad" type="text" placeholder="facultad"value=""/>
    <input class="sede" name="sede" type="text" placeholder="sede"value=""/>
    <input class="historia" name="historia" type="text" placeholder="historia"value=""/>
    <button type="submit" class="enviarDatos">Editar</button>
</form>

{include file = "footer.tpl"}