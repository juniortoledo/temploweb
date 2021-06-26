<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * ajustes do sistema
 */
class AjustesModel extends Conn
{
  /**
   * adiciona
   * $data rebe um array
   */
  public function adiciona(array $data, $id)
  {
    $res = $this->db()->insert(array(
      'id_user' => $id,
      'patrimonio_etiqueta' => $data['etiquetas'],
      'patrimonio_formato' => $data['formato'],
      'patrimonio_papel' => $data['papel'],
      'data_formato' => $data['data'],
      'moeda_formato' => $data['moeda']
    ))->into('ajustes_do_sistema');
  }

  /**
   * faz a edição da patrimônio
   * $data rebe um array
   * $id rece o id do usuário logado
   */
  public function editarPatrimonio(array $data, $id)
  {
    $res = $this->db()->update('igrejas')
    ->where('id_user')->is($id)
    ->set(array(
      'patrimonio_etiqueta' => $data['etiquetas'],
      'patrimonio_formato' => $data['formato'],
      'patrimonio_papel' => $data['papel']
    ));

    return $res;
  }

  /**
   * faz a edição da data
   * $data rebe um array
   * $id rece o id do usuário logado
   */
  public function editarData(array $data, $id)
  {
    $res = $this->db()->update('igrejas')
    ->where('id_user')->is($id)
    ->set(array(
      'data_formato' => $data['formato']
    ));

    return $res;
  }

  /**
   * faz a edição da moeda
   * $data rebe um array
   * $id rece o id do usuário logado
   */
  public function editarMoeda(array $data, $id)
  {
    $res = $this->db()->update('igrejas')
    ->where('id_user')->is($id)
    ->set(array(
      'moeda_formato' => $data['moeda']
    ));

    return $res;
  }

  /**
   * buscar ajustes pelo id
   */
  public function busca($id)
  {
    $res = $this->db()->from('ajustes_do_sistema')
    ->where('id_user')->is($id)
    ->select()
    ->all();

    return $res;
  }
}
