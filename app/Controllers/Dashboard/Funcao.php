<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\FuncaoModel;

/**
 * Usuarios
 */
class Funcao extends View
{
  private $funcaoModel;
  public function __construct()
  {
    $this->funcaoModel = new FuncaoModel();
    parent::__construct();
  }

  /**
   * view home
   */
  public function home()
  {
    $data = $this->funcaoModel->listagem($_SESSION['id']);

    echo $this->view->render('dashboard/secretaria/funcao/home', ['data' => $data]);
  }

  /**
   * view editar
   */
  public function editar($data)
  {
    $res = $this->funcaoModel->listagemId($data['id']);

    echo $this->view->render('dashboard/secretaria/funcao/editar', ['data' => $res]);
  }

  /**
   * adionar novo
   */
  public function add($data)
  {
    $data = ['http' => $_SERVER['METHOD_REQUEST']] + $data;

    $res = $this->funcaoModel->add($data, $_SESSION['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/funcao');
    }
  }

  /**
   * edita o cargo
   */
  public function update($data)
  {    
    $res = $this->funcaoModel->update($data);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/funcao/editar/'.$data['id']);
    }
  }

  /**
   * deletar
   */
  public function del($data)
  {
    $res = $this->funcaoModel->del($data['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/funcao');
    }
  }
}
