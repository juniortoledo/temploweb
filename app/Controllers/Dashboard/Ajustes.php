<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\AjustesModel;

/**
 * Ajustes do sistema
 */
class Ajustes extends View
{
  /**
   * view home
   */
  public function home()
  {
    // model Ajustes
    $ajustes = new AjustesModel();
    $data = $ajustes->busca($_SESSION['id']);

    echo $this->view->render('dashboard/sistema/ajustes_sistema/home', ['ajustes' => $data]);
  }

  /**
   * altera as configurações de pratrimônio
   */
  public function patrimonio($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    // model Ajustes
    $ajustes = new AjustesModel();
    $ajustes->editarPatrimonio($data, $_SESSION['id']);

    header('location: '.URL.'dashboard/sistema/ajustes');
  }

  /**
   * altera as configurações de data
   */
  public function data($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    // model Ajustes
    $ajustes = new AjustesModel();
    $ajustes->editarData($data, $_SESSION['id']);

    header('location: '.URL.'dashboard/sistema/ajustes');
  }

  /**
   * altera as configurações de moeda
   */
  public function moeda($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    // model Ajustes
    $ajustes = new AjustesModel();
    $ajustes->editarMoeda($data, $_SESSION['id']);

    header('location: '.URL.'dashboard/sistema/ajustes');
  }
}
