<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz inserção no banco de dados
 */
class FuncaoModel extends Conn
{
  /**
   * adiciona  novo nome
   * $data rebe um array
   * $id recebe id da session
   */
  public function add(array $data, $id)
  {
    $res = $this->db()->insert(array(
      'id_user' => $id,
      'nome' => $data['nome']
    ))->into('funcao');

    return $res;
  }

  /**
   * busca todos os funcao
   * $id recebe o id da sessão do usuário logado
   */
  public function listagem($id)
  {
    $res = $this->db()->from('funcao')
      ->where('id_user')->is($id)
      ->orderBy('nome')
      ->select()
      ->all();

    return $res;
  }

  /**
   * busca pelo id do nome
   */
  public function listagemId($id)
  {
    $res = $this->db()->from('funcao')
      ->where('id')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * deleta o nome pelo id
   */
  public function del($id)
  {
    $res = $this->db()->from('funcao')
      ->where('id')->is($id)
      ->delete();

    return $res;
  }

  /**
   * editar o nome
   */
  public function update(array $data)
  {
    $res = $this->db()->update('funcao')
      ->where('id')->is($data['id'])
      ->set(array(
        'nome' => $data['nome']
      ));

    return $res;
  }
}
