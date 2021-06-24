<?php

namespace App\Controllers\Dashboard;

use App\Config\View;

/**
 * dashboard
 */
class Web extends View
{
  /**
   * view home
   */
  public function home()
  {
    //verifica se o perfil está completo
    if ($_SESSION['completo']) {
      echo $this->view->render('dashboard/home');
    } else {
      header('location: ' . URL . 'dashboard/perfil');
    }
  }
}
