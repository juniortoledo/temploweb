<?php

namespace App\Models\Auth;

use App\Config\Conn;

/**
 * faz a checagem e a inserção no banco de dados
 */
class CadastroModel extends Conn
{
  /**
   * faz a cadastro do usuário
   * $data rebe um array
   */
  public function adiciona(array $data)
  {
    $res = $this->db()->insert(array(
      'nome' => $data['nome'],
      'email' => $data['email'],
      'password' => md5($data['password']),
      'level' => 'sede',
      'created' => date('d-m-Y'),
      'completo' => 0
    ))->into('user');
  }

  /**
   * faz a cadastro do usuário tipo comum
   * $data rebe um array
   */
  public function adicionaComum(array $data)
  {
    $res = $this->db()->insert(array(
      'nome' => $data['nome'],
      'email' => $data['email'],
      'password' => md5($data['password']),
      'level' => 'comum',
      'created' => date('d-m-Y'),
      'completo' => 0
    ))->into('user');
  }

  /**
   * faz a checagem se existem o email
   * $data rebe um array
   */
  public function buscaEmail(array $data)
  {
    $res = $this->db()->from('user')
      ->where('email')->is($data['email'])
      ->select()
      ->all();

    return $res;
  }
}
