<?php

namespace App\Controllers\Dashboard;

use App\Config\View;

/**
 * Usuarios
 */
class Logs extends View
{
  /**
   * view home
   */
  public function home()
  {
    echo $this->view->render('dashboard/sistema/logs/home');
  }
}
