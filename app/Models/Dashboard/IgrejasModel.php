<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz a checagem e a inserção no banco de dados
 */
class IgrejasModel extends Conn
{
  /**
   * faz a cadastro do perfil
   * $data rebe um array
   * $id rece o id do usuário logado
   */
  public function adicionar(array $data, $id)
  {
    $res = $this->db()->insert(array(
      'user' => $id,
      'nome_igreja' => $data['nome-igreja'],
      'ministerio' => $data['ministerio'],
      'pastor' => $data['pastor'],
      'documento' => $data['documento'],
      'fundacao' => $data['fundacao'],
      'endereco' => $data['endereco'],
      'bairro' => $data['bairro'],
      'cidade' => $data['cidade'],
      'estado' => $data['estado'],
      'cep' => $data['cep'],
      'pais' => $data['pais'],
      'telefone' => $data['telefone'],
      'email' => $data['email'],
      'site' => $data['site'],
      'tipo' => 'congregacao',
      'updated' => date('d-m-Y')
    ))->into('igrejas');
  }

  /**
   * faz a edição do perfil
   * $data rebe um array
   * $id rece o id do usuário logado
   */
  public function editar(array $data)
  {
    $res = $this->db()->update('igrejas')
      ->where('id')->is($data['id'])
      ->set(array(
        'nome_igreja' => $data['nome-igreja'],
        'ministerio' => $data['ministerio'],
        'pastor' => $data['pastor'],
        'documento' => $data['documento'],
        'fundacao' => $data['fundacao'],
        'endereco' => $data['endereco'],
        'bairro' => $data['bairro'],
        'cidade' => $data['cidade'],
        'estado' => $data['estado'],
        'cep' => $data['cep'],
        'pais' => $data['pais'],
        'telefone' => $data['telefone'],
        'email' => $data['email'],
        'site' => $data['site'],
        'updated' => date('d-m-Y')
      ));

    return $res;
  }

  /**
   * faz a checagem se existe perfil da congregacao
   * $data rebe um id do usuário logado
   */
  public function buscaIgreja($id)
  {
    $res = $this->db()->from('igrejas')
      ->orderBy('nome_igreja')
      ->where('user')->is($id)
      ->where('tipo')->is('congregacao')
      ->select()
      ->all();

    return $res;
  }

  /**
   * faz a checagem se existe perfil da sede
   * $data rebe um id do usuário logado
   */
  public function buscaSede($id)
  {
    $res = $this->db()->from('igrejas')
      ->orderBy('nome_igreja')
      ->where('user')->is($id)
      ->where('tipo')->is('sede')
      ->select()
      ->all();

    return $res;
  }

  /**
   * listagem da congregacao pelo id
   */
  public function buscaCongregacao($id)
  {
    $res = $this->db()->from('igrejas')
      ->where('id')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * deleta a congregacao pelo id
   */
  public function del($id)
  {
    $res = $this->db()->from('igrejas')
      ->where('id')->is($id)
      ->delete();

    return $res;
  }
}
