<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz inserção no banco de dados
 */
class OcorrenciasModel extends Conn
{
  /**
   * adiciona  novo descricao
   * $data rebe um array
   * $id recebe id da session
   */
  public function add(array $data, $id)
  {
    $res = $this->db()->insert(array(
      'id_user' => $id,
      'descricao' => $data['descricao'],
      'tipo' => $data['tipo']
    ))->into('ocorrencia');

    return $res;
  }

  /**
   * busca todos os ocorrencia
   * $id recebe o id da sessão do usuário logado
   */
  public function listagem($id)
  {
    $res = $this->db()->from('ocorrencia')
      ->where('id_user')->is($id)
      ->orderBy('descricao')
      ->select()
      ->all();

    return $res;
  }

  /**
   * busca pelo id do descricao
   */
  public function listagemId($id)
  {
    $res = $this->db()->from('ocorrencia')
      ->where('id')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * deleta o descricao pelo id
   */
  public function del($id)
  {
    $res = $this->db()->from('ocorrencia')
      ->where('id')->is($id)
      ->delete();

    return $res;
  }

  /**
   * editar o descricao
   */
  public function update(array $data)
  {
    $res = $this->db()->update('ocorrencia')
      ->where('id')->is($data['id'])
      ->set(array(
        'descricao' => $data['descricao'],
        'tipo' => $data['tipo']
      ));

    return $res;
  }
}
