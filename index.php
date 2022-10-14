<!DOCTYPE html>
<html class="p-3 mb-2 bg-dark text-white">
  <?php require_once 'head.php' ?>
  <body class="p-3 mb-2 bg-dark text-white text-center position-relative" style="height: 100%">
    <?php require_once 'header.php' ?>
      <div class="lead display-6 my-5">Qual a sua data de nascimento?</div>
      <form id='descubra' method='post' action='signo.php' class="my-5">
        <div class="form-floating d-grid gap-2 col-5 mx-auto mb-3">
          <input type="date" name="data" class="form-control" id="floatingInput">
          <label for="floatingInput" class="text-dark">Data de nascimento aqui:</label>
          <button type="submit" class="btn btn-primary mb-3">Descubra</button>
        </div> 
      </form>
    <?php require_once 'footer.php' ?>
  </body>
</html>