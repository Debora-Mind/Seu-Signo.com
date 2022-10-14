<?php
require_once 'DescubraOSigno.php';

$data = $_POST['data'];
$signo = new DescubraOSigno($data);
?>

<!DOCTYPE html>
<html class="p-3 mb-2 bg-dark text-white">
    <body class="p-3 mb-2 bg-dark text-white text-center position-relative" style="height: 100%">
        <?php require_once 'head.php' ?>

        <div class="position-relative">
            <img src="img/<?php echo $signo->id ?>.png" class="opacity-75 position-fixed top-50 start-50 translate-middle"style="width: 40%">
        </div>  
        <div class="position-relative">
            <div class="display-5"><?php echo($signo->nome); ?></div>
            <div class="lead"><?php echo($signo->dataInicio . ' - ' . $signo->dataFim)?></div>
            <div class="lead m-5"><?php echo($signo->descricao)?></div>
        </div>

        <?php require_once 'footer.php' ?>
    </body>
    
</html>
