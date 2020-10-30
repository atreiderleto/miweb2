<?php require_once './layouts/header.php' ?>

<h3 class="text-center mt-4">Pida su presupuesto o Soporte Colque los datos en el Formulario</h3>

<form id="formulario" class="contianer col-6 bg-primary rounded p-3 mx-auto mt-5 mb-5" action="form.php" method="POST">
  <div  class="form-group">
      <label class="font-weight-bold text-white mt-2" for="nombre">Nombre</label>
      <input id="nombre" class="form-control form-control-lg" type="text" name="nombre">

      <label class="font-weight-bold text-white mt-2" for="email">Correo</label>
      <input id="correo"  class=" correo form-control form-control-lg" type="email" name="email">

      <label class="font-weight-bold text-white mt-2" for="mensaje">Mensaje</label>
      <textarea id="mensaje" class="mensaje form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>

      <input class="row col-12 btn btn-success ml-auto mt-3 font-weight-bold"  type="submit" value="Enviar">
  </div>
</form>



<?php require_once './layouts/footer.php' ?>