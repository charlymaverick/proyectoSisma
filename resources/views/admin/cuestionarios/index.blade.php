<form action="{{url('/cuestionarios')}}" method="post" entype="multypart/form-data">
@csrf
<label for="id"> id </label>
<input type="id" name="id" id="id">
<br>
<label for="usuario"> Tipo usuario</label>
<input type="id" name="id" id="id">
<br>
<label for="inicio">Fecha inicio</label>
<input type="date" name="inicio" id="inicio">
<br>
<label for="fin">Fecha fin</label>
<input type="id" name="fin" id="fin">
<br>
<label for="tipocues">Tipo cuestionario</label>
<input type="id" name="tipocues" id="tipocues">
<br>
<label for="activo">Activo</label>
<input type="boolean" name="activo" id="activo">
<br>
<label for="Enviar">Activo</label>
<input type="submit" name="submit" id="submit ">

