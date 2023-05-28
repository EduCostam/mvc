<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
    public function index() {
        $this->load->model("ProdutosModel", "produtos");

        $resultado = $this->produtos->listar_todos();

        $dados = array("produtos" => $resultado);

        $this->load->view("produtos/lista", $dados);
    }
}