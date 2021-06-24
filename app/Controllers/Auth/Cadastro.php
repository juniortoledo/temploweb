<?php

namespace App\Controllers\Auth;

use App\Models\Auth\CadastroModel;

/**
 * cadastro do usuário sede
 */
class Cadastro extends CadastroModel
{
  /**
   * recebe os dados via post
   * array $data
   */
  public function cadastro($data)
  {
    $data = json_decode(file_get_contents('php://input'), true);

    //verifica se email existe
    if ($this->buscaEmail($data)) {
      echo json_encode(['status' => 401]);
    } else {
      //cadastra os dados do usuário
      $this->adiciona($data);

      echo json_encode(['status' => 200]);
    }
  }
}
