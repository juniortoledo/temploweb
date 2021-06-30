<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\TipoPessoaModel;

/**
 * TipoPessoa
 */
class TipoPessoa extends View
{
  /**
   * view home
   */
  public function home()
  {
    //Model
    $tipo = new TipoPessoaModel();
    //listafem dos tipos
    $data = $tipo->listagem($_SESSION['id']);

    echo $this->view->render('dashboard/secretaria/tipo_pessoa/home', ['tipos' => $data]);
  }

  /**
   * view editar
   */
  public function editar($data)
  {
    //Model
    $tipo = new TipoPessoaModel($data);
    //listafem dos tipos
    $data = $tipo->listagemId($data['id']);

    echo $this->view->render('dashboard/secretaria/tipo_pessoa/editar', ['tipo' => $data]);
  }

  /**
   * cadastra um novo tipo
   */
  public function adicionar($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //Model
    $tipo = new TipoPessoaModel();

    $tipo->add(['id' => $_SESSION['id'], 'tipo' => $data['tipo']]);
    header('location: '.URL.'dashboard/secretaria/tipopessoas');
    
  }

  //deletar um tipo 
  public function deletar($data)
  {
    //Model
    $tipo = new TipoPessoaModel();

    $tipo->del($data['id']);
    header('location: '.URL.'dashboard/secretaria/tipopessoas');
    
  }

  //altera o nome do tipo 
  public function update($data)
  {
    //Model
    $tipo = new TipoPessoaModel();

    $tipo->editar($data);
    header('location: '.URL.'dashboard/secretaria/tipopessoas/editar/'.$data['id']);
    
  }

}
