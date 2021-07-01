<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\OcorrenciasModel;

/**
 * Usuarios
 */
class Ocorrencias extends View
{
  private $ocorrenciasModel;
  public function __construct()
  {
    $this->ocorrenciasModel = new OcorrenciasModel();
    parent::__construct();
  }

  /**
   * view home
   */
  public function home()
  {
    $data = $this->ocorrenciasModel->listagem($_SESSION['id']);

    echo $this->view->render('dashboard/secretaria/ocorrencias/home', ['data' => $data]);
  }

  /**
   * view editar
   */
  public function editar($data)
  {
    $res = $this->ocorrenciasModel->listagemId($data['id']);

    echo $this->view->render('dashboard/secretaria/ocorrencias/editar', ['data' => $res]);
  }

  /**
   * adionar novo
   */
  public function add($data)
  {
    $data = ['http' => $_SERVER['METHOD_REQUEST']] + $data;

    $res = $this->ocorrenciasModel->add($data, $_SESSION['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/ocorrencias');
    }
  }

  /**
   * edita o cargo
   */
  public function update($data)
  {    
    $res = $this->ocorrenciasModel->update($data);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/ocorrencias/editar/'.$data['id']);
    }
  }

  /**
   * deletar
   */
  public function del($data)
  {
    $res = $this->ocorrenciasModel->del($data['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/ocorrencias');
    }
  }
}
