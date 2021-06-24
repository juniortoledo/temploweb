<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz inserção no banco de dados
 */
class TipoPessoaModel extends Conn
{
  /**
   * adiciona novos tipos de pessoas
   * $data rebe um array com o id do usuário logado, e o tipo 
   */
  public function add(array $data)
  {
    $res = $this->db()->insert(array(
      'id_user' => $data['id'],
      'tipo' => $data['tipo'],
      'updated' => date('d-m-Y')
    ))->into('tipos');
  }

  /**
   * busca tipos os tipos do usuário
   * $id recebe o id da sessão do usuário logado
   */
  public function listagem($id)
  {
    $res = $this->db()->from('tipos')
      ->where('id_user')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * busca apenas um tipo pelo id
   */
  public function listagemId($id)
  {
    $res = $this->db()->from('tipos')
      ->where('id')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * deleta o tipo pelo id
   */
  public function del($id)
  {
    $res = $this->db()->from('tipos')
      ->where('id')->is($id)
      ->delete();

    return $res;
  }

  /**
   * editar o nome do tipo
   */
  public function editar(array $data)
  {
    $res = $this->db()->update('tipos')
      ->where('id')->is($data['id'])
      ->set(array(
        'tipo' => $data['tipo'],
        'updated' => date('d-m-Y')
      ));

    return $res;
  }
}
