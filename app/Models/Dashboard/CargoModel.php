<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz inserção no banco de dados
 */
class CargoModel extends Conn
{
  /**
   * adiciona  novo cargo
   * $data rebe um array
   * $id recebe id da session
   */
  public function add(array $data, $id)
  {
    $res = $this->db()->insert(array(
      'id_user' => $id,
      'cargo' => $data['cargo'],
      'sigla' => $data['sigla']
    ))->into('cargos');

    return $res;
  }

  /**
   * busca todos os cargos
   * $id recebe o id da sessão do usuário logado
   */
  public function listagem($id)
  {
    $res = $this->db()->from('cargos')
      ->where('id_user')->is($id)
      ->orderBy('cargo')
      ->select()
      ->all();

    return $res;
  }

  /**
   * busca pelo id do cargo
   */
  public function listagemId($id)
  {
    $res = $this->db()->from('cargos')
      ->where('id')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * deleta o cargo pelo id
   */
  public function del($id)
  {
    $res = $this->db()->from('cargos')
      ->where('id')->is($id)
      ->delete();

    return $res;
  }

  /**
   * editar o cargo
   */
  public function update(array $data)
  {
    $res = $this->db()->update('cargos')
      ->where('id')->is($data['id'])
      ->set(array(
        'cargo' => $data['cargo'],
        'sigla' => $data['sigla']
      ));

    return $res;
  }
}
