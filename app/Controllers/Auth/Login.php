<?php

namespace App\Controllers\Auth;

use App\Models\Auth\LoginModel;

/**
 * login dos usuários
 * tipo sede e mombros
 */
class Login extends LoginModel
{
  /**
   * recebe os dados via post
   * array $data
   */
  public function login($data)
  {
    $data = json_decode(file_get_contents('php://input'), true);

    //verifica se email e senha existem
    if ($this->buscaUsuario($data)) {
      //faz o login
      $res = $this->buscaUsuario($data);

      foreach ($res as $user) {
        $_SESSION['user'] = true;
        $_SESSION['id'] = $user->id;
        $_SESSION['nome'] = $user->nome;
        $_SESSION['level'] = $user->level;
        $_SESSION['completo'] = $user->completo;
      }

      echo json_encode(['status' => 200]);
    } else {
      //se o email não existir
      echo json_encode(['status' => 401]);
    }
  }
}
