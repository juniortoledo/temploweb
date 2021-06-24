<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\TipoPessoaModel;
use App\Models\Dashboard\UsuariosModel;
use App\Models\Auth\CadastroModel;
use App\Models\Auth\LoginModel;

/**
 * Usuarios
 */
class Usuarios extends View
{
  /**
   * view usuários
   */
  public function usuariosHome()
  {
    echo $this->view->render('dashboard/sistema/usuarios/home');
  }

  /**
   * view cadastrar / editar
   */
  public function usuariosCadastrar()
  {
    //model perfil
    $tipos = new TipoPessoaModel();
    $data = $tipos->listagem($_SESSION['id']);

    echo $this->view->render('dashboard/sistema/usuarios/cadastrar', ['funcao' => $data]);
    
  }

  //cadastra novo usuário
  public function cadastrar($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //cria um novo usuário
    $cadastroModel = new CadastroModel();
    $cadastroModel->adicionaComum([
      'nome' => $data['nome'],
      'email' => $data['email'],
      'password' => $data['password'],
    ]);

    //faz o login e busca id do usuário recém cadastrado
    $login = new LoginModel();
    $res = $login->buscaUsuario(['email' => $data['email'], 'password' => $data['password']]);

    $usuariosModel = new UsuariosModel();

    foreach($res as $item) {
      //insere as permissões
      $usuariosModel->permissoes($data, $item->id);

      //preenche o perfil user comum
      $usuariosModel->userComum($data, $item->id, $_SESSION['id']);
    }

    header('location: '.URL.'dashboard/sistema/usuarios'); 
  }

  /**
   * listagem dos dados dos usuários cadastrados pelo id da sede
   */
  public function listagem()
  {
    //model usuarios
    $usuarios =  new UsuariosModel();

    //faz apenas a edição dos dados
    $data = $usuarios->buscaUsuarios($_SESSION['id']);

    echo json_encode($data, true);
  }
}
