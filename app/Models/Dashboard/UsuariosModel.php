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
   * edita as permissões
   * $data rebe um array
   * $id recebe o id do usuário recem cadastrado (comum)
   */
  public function permissoesEditar(array $data)
  {
    $res = $this->db()->update('permissoes')
      ->where('id_user')->is($data['id'])
      ->set(array(
      'secretaria_ver' => isset($data['secretaria-ver']) ? 'on' : NULL,
      'secretaria_editar' => isset($data['secretaria-editar']) ? 'on' : NULL,
      'secretaria_adicionar' => isset($data['secretaria-adicionar']) ? 'on' : NULL,
      'secretaria_remover' => isset($data['secretaria-remover']) ? 'on' : NULL,

      'usuarios_ver' => isset($data['usuarios-ver']) ? 'on' : NULL,
      'usuarios_editar' => isset($data['usuarios-editar']) ? 'on' : NULL,
      'secretaria_adicionar' => isset($data['usuarios-adicionar']) ? 'on' : NULL,
      'usuarios_remover' => isset($data['usuarios-remover']) ? 'on' : NULL,

      'celula_ver' => isset($data['celula-ver']) ? 'on' : NULL,
      'celula_editar' => isset($data['celula-editar']) ? 'on' : NULL,
      'celula_adicionar' => isset($data['celula-adicionar']) ? 'on' : NULL,
      'celula_remover' => isset($data['celula-remover']) ? 'on' : NULL,

      'config_ver' => isset($data['config-ver']) ? 'on' : NULL,
      'config_editar' => isset($data['config-editar']) ? 'on' : NULL,
      'config_adicionar' => isset($data['config-adicionar']) ? 'on' : NULL,
      'config_remover' => isset($data['config-remover']) ? 'on' : NULL,

      'financeiro_ver' => isset($data['financeiro-ver']) ? 'on' : NULL,
      'financeiro_editar' => isset($data['financeiro-editar']) ? 'on' : NULL,
      'financeiro_adicionar' => isset($data['financeiro-adicionar']) ? 'on' : NULL,
      'financeiro_remover' => isset($data['financeiro-remover']) ? 'on' : NULL,

      'patrimonio_ver' => isset($data['patrimonio-ver']) ? 'on' : NULL,
      'patrimonio_editar' => isset($data['patrimonio-editar']) ? 'on' : NULL,
      'patrimonio_adicionar' => isset($data['patrimonio-adicionar']) ? 'on' : NULL,
      'patrimonio_remover' => isset($data['patrimonio-remover']) ? 'on' : NULL
    ));
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
   * edita o perfil
   * $data rebe um array
   */
  public function userComumEditar(array $data)
  {
    $res = $this->db()->update('user_comum')
    ->where('id_user')->is($data['id'])
    ->set(array(
      'nome' => $data['nome'],
      'nome_exibicao' => $data['nome-exibicao'],
      'telefone' => $data['telefone'],
      'status' => $data['status'],
      'funcao' => $data['funcao'],
      'email' => $data['email'],
      'sexo' => $data['sexo']
    ));
  }

  /**
   * busca todos os usuários comuns
   * $id da sede
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

  /**
   * busca todos os usuários
   * $id do usuário
   */
  public function buscaUsuariosTotal($id)
  {
    $res = $this->db()->from('user')
      ->where('id')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * busca todos os usuários comum
   * $id do usuário
   */
  public function buscaUsuariosComum($id)
  {
    $res = $this->db()->from('user_comum')
      ->where('id_user')->is($id)
      ->select()
      ->all();

    return $res;
  }

  /**
   * busca permissoes
   * $id do usuário
   */
  public function buscaPermissoes($id)
  {
    $res = $this->db()->from('permissoes')
      ->where('id_user')->is($id)
      ->select()
      ->all();

    return $res;
  }

   /**
   * deleta todos os dados do usuário
   * $id do usuário
   */
  public function del($id)
  {
    $this->db()->from('permissoes')
      ->where('id_user')->is($id)
      ->delete();

    $this->db()->from('user_comum')
      ->where('id_user')->is($id)
      ->delete();

    $this->db()->from('user')
      ->where('id')->is($id)
      ->delete();
  }
}
