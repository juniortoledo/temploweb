<?php

namespace App\Models\Dashboard;

use App\Config\Conn;

/**
 * faz a checagem e a inserção no banco de dados
 */
class UsuariosModel extends Conn
{
  /**
   * faz a cadastro das permissões
   * $data rebe um array
   * $id recebe o id do usuário recem cadastrado (comum)
   */
  public function permissoes(array $data, $id)
  {
    $res = $this->db()->insert(array(
      'id_user' => $id,

      'secretaria_ver' => $data['secretaria-ver'],
      'secretaria_editar' => $data['secretaria-editar'],
      'secretaria_adicionar' => $data['secretaria-adicionar'],
      'secretaria_remover' => $data['secretaria-remover'],

      'usuarios_ver' => $data['usuarios-ver'],
      'usuarios_editar' => $data['usuarios-editar'],
      'secretaria_adicionar' => $data['usuarios-adicionar'],
      'usuarios_remover' => $data['usuarios-remover'],

      'celula_ver' => $data['celula-ver'],
      'celula_editar' => $data['celula-editar'],
      'celula_adicionar' => $data['celula-adicionar'],
      'celula_remover' => $data['celula-remover'],

      'config_ver' => $data['config-ver'],
      'config_editar' => $data['config-editar'],
      'config_adicionar' => $data['config-adicionar'],
      'config_remover' => $data['config-remover'],

      'financeiro_ver' => $data['financeiro-ver'],
      'financeiro_editar' => $data['financeiro-editar'],
      'financeiro_adicionar' => $data['financeiro-adicionar'],
      'financeiro_remover' => $data['financeiro-remover'],

      'patrimonio_ver' => $data['patrimonio-ver'],
      'patrimonio_editar' => $data['patrimonio-editar'],
      'patrimonio_adicionar' => $data['patrimonio-adicionar'],
      'patrimonio_remover' => $data['patrimonio-remover']
    ))->into('permissoes');
  }

  /**
   * faz a cadastro do perfil
   * $data rebe um array
   * $id recebe o id do usuário recem cadastrado (comum)
   */
  public function userComum(array $data, $id, $id_sede)
  {
    $res = $this->db()->insert(array(
      'id_user' => $id,
      'id_sede' => $id_sede,
      'nome' => $data['nome'],
      'nome_exibicao' => $data['nome-exibicao'],
      'telefone' => $data['telefone'],
      'status' => $data['status'],
      'data_cadastro' => $data['data-cadastro'],
      'funcao' => $data['funcao'],
      'email' => $data['email'],
      'sexo' => $data['sexo']
    ))->into('user_comum');
  }

  /**
   * busca todos os usuários comuns
   */
  public function buscaUsuarios($id)
  {
    $res = $this->db()->from('user_comum')
      ->where('id_sede')->is($id)
      ->orderBy('nome')
      ->select()
      ->all();

    return $res;
  }
}
