<?php
require_once('controllers/PessoaController.php');

$controller = new PessoaController();
//$url2= $_GET['url'];


if ( isset($_GET['url'])) {
    $url = explode ('/', $_GET['url']);
    //print_r($url);
  
    switch ($url[0]) {
        case 'listar':
            $controller->listarPessoas();
            break;
        case 'adicionar':
            $controller->adicionarPessoa();
            break;
        case 'form':
            $controller->form();
            break;
        case 'excluir':
            if ((isset($url[1]))) {
                
                $id = $url[1];
                $controller->excluir($id);
                } else{
                    
                    header('Location:/cadastro');
                }
            
            break;
        case 'editarform':
            if ((isset($url[1]))) {
                
            $id = $url[1];
            $controller->editar($id);
            } else{
                $controller->listarPessoas();
            }
            break;
        case 'editar':
            $controller->editarPessoa();
            break;
        default:
            $controller->listarPessoas();
            break;
    }
}else {
    
    $controller->listarPessoas();
}

?>