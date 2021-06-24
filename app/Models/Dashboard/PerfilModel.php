<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz a checagem e a inserção no banco de dados
 */
class PerfilModel extends Conn
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
      'tipo' => 'sede',
      'updated' => date('d-m-Y')
    ))->into('igrejas');
  }

  /**
   * faz a edição do perfil
   * $data rebe um array
   * $id rece o id do usuário logado
   */
  public function editar(array $data, $id)
  {
    $res = $this->db()->update('igrejas')
      ->where('user')->is($id)
      ->where('tipo')->is('sede')
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
   * faz a checagem se existe perfil da sede
   * $data rebe um id do usuário logado
   */
  public function buscaPerfil($id)
  {
    $res = $this->db()->from('igrejas')
      ->where('user')->is($id)
      ->where('tipo')->is('sede')
      ->select()
      ->all();

    return $res;
  }

  /**
   * atualiza o status de perfil completo do usuário
   * $id recebe o id do usuário logado
   */
  public function completo($id)
  {
    $res = $this->db()->update('user')
      ->where('id')->is($id)
      ->set(array(
        'completo' => 1
      ));

    return $res;
  }
}
