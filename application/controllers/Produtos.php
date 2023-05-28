<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// controler de produtos
class Produtos extends CI_Controller {
    public function index() {

		// requisita os dados no model
        $this->load->model("ProdutosModel", "produtos");

        $resultado = $this->produtos->listar_todos();


		// retorna os dados passando para a view
        $dados = array("produtos" => $resultado);

        $this->load->view("produtos/lista", $dados);
    }
}
