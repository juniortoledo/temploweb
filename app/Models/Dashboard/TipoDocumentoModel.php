<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz inserção no banco de dados
 */
class TipoDocumentoModel extends Conn
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
      'nome' => $data['nome'],
      'tipo' => $data['tipo']
    ))->into('tipo_documento');

    return $res;
  }

  /**
   * busca todos os tipo_documento
   * $id recebe o id da sessão do usuário logado
   */
  public function listagem($id)
  {
    $res = $this->db()->from('tipo_documento')
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
    $res = $this->db()->from('tipo_documento')
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
    $res = $this->db()->from('tipo_documento')
      ->where('id')->is($id)
      ->delete();

    return $res;
  }

  /**
   * editar o nome
   */
  public function update(array $data)
  {
    $res = $this->db()->update('tipo_documento')
      ->where('id')->is($data['id'])
      ->set(array(
        'nome' => $data['nome'],
        'tipo' => $data['tipo']
      ));

    return $res;
  }
}
