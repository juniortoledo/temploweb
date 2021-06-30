<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\CargoModel;

/**
 * Usuarios
 */
class Cargo extends View
{
  private $cargoModel;
  public function __construct()
  {
    $this->cargoModel = new CargoModel();
    parent::__construct();
  }

  /**
   * view home
   */
  public function home()
  {
    $data = $this->cargoModel->listagem($_SESSION['id']);

    echo $this->view->render('dashboard/secretaria/cargo/home', ['data' => $data]);
  }

  /**
   * view editar
   */
  public function editar($data)
  {
    $res = $this->cargoModel->listagemId($data['id']);

    echo $this->view->render('dashboard/secretaria/cargo/editar', ['data' => $res]);
  }

  /**
   * adionar novo
   */
  public function add($data)
  {
    $data = ['http' => $_SERVER['METHOD_REQUEST']] + $data;

    $res = $this->cargoModel->add($data, $_SESSION['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/cargo');
    }
  }

  /**
   * edita o cargo
   */
  public function update($data)
  {    
    $res = $this->cargoModel->update($data);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/cargo/editar/'.$data['id']);
    }
  }

  /**
   * deletar
   */
  public function del($data)
  {
    $res = $this->cargoModel->del($data['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/secretaria/cargo');
    }
  }
}
