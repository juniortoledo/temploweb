<?php

namespace App\Controllers\Auth;

use App\Config\View;

/**
 * faz as verificações de login e cadastro do usuário
 * página de erro
 */
class Web extends View
{
  /**
   * view home
   */
  public function home()
  {
    echo $this->view->render('auth/home');
  }

  /**
   * view cadastro
   */
  public function cadastro()
  {
    echo $this->view->render('auth/cadastro');
  }

  /**
   * view login
   */
  public function login()
  {
    echo $this->view->render('auth/login');
  }

  /**
   * view erro
   */
  public function erro()
  {
    echo $this->view->render('auth/erro');
  }
}
