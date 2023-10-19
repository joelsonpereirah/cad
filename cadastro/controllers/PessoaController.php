<?php
require_once('models/PessoaModel.php');

class PessoaController {
    private $pessoaModel;

    public function __construct() {
        $this->pessoaModel = new PessoaModel();
    }

    public function listarPessoas() {
        $pessoas = $this->pessoaModel->getAllPessoas();
        include 'views/listar_pessoas.php';
    }

    public function listarPessoa($id) {
        $pessoa = $this->pessoaModel->getPessoa($id);
        //include 'views/editar_pessoas.php';
    }
  
    public function adicionarPessoa(){
        $rqt = $_SERVER['REQUEST_METHOD'];
        //var_dump($rqt);

        if ($_SERVER['REQUEST_METHOD']==='GET') {
            include 'views/cadastrar_pessoas.php';
    }   
        else if ($_SERVER['REQUEST_METHOD']==='POST') {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $data_nascimento = $_POST['data_nascimento'];
            $this->pessoaModel->addPessoa($nome, $cpf, $data_nascimento);
            $this->listarPessoas();          
        }    
    }  

    public function form(){
            include 'views/cadastrar_pessoas.php';
    }

    public function excluir($id){
        $this->pessoaModel->deletePessoa($id);
        header('Location:/cadastro');
      
      
        
        

    }

    public function editar($id){
        $pessoas=$this->pessoaModel->getPessoa($id);
        include 'views/editar_pessoas.php';

    }

    public function editarPessoa(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $data_nascimento = $_POST['data_nascimento'];
            $this->pessoaModel->editarPessoa($id ,$nome, $cpf, $data_nascimento);
            $this->listarPessoas();          
        }    
    }




    
}
?>