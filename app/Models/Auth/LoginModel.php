<?php

namespace App\Models\Auth;

use App\Config\Conn;

/**
 * faz a checagem do usuário
 */
class LoginModel extends Conn
{
  /**
   * faz a checagem se existem email e senha
   * $data rebe um array
   * retorna todos os dados do usuário
   */
  public function buscaUsuario(array $data)
  {
    $res = $this->db()->from('user')
      ->where('email')->is($data['email'])
      ->where('password')->is(md5($data['password']))
      ->select()
      ->all();

    return $res;
  }
}
