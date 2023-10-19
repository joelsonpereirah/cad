<?php

require_once ("controllers/PessoaController.php");


$controller = new PessoaController();

if (isset($_GET['url'])) {
    
    
    $url = explode('/', $_GET['url']);

    switch ($url[0]) {
        case 'listar':
            echo 'entrei no listar';
            break;
        
        default:
        echo 'entrei no default';
            break;
    }
}



