<?php
require_once 'encabezado.php';

?>
<div class="container">
    <h2> Esta es la pagina de inicio la cual es la principal, bienvenido.</h2>
</div>

<?php
if (!empty($_POST['menu'])) {
$pagina = $_POST['menu'];
    switch ($pagina) {
        case '1':
            require '../../sistema/2julio/index.php';
            break;

        case '2':
            require_once 'consultas.php';
            break;

        case '3':
            include_once 'https://sistemas.pnc.gob.gt/escritorio/index.php?r=vehiculos/';
            break;

        default:
            echo "Escoja el tipo de consulta que quiere realizar";
            break;
    }
}

?>