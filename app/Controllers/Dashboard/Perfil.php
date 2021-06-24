<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\PerfilModel;

/**
 * igrejas
 */
class Perfil extends View
{
  /**
   * view home
   */
  public function home()
  {
    //model perfil
    $perfil = new PerfilModel();
    $res = $perfil->buscaPerfil($_SESSION['id']);

    //verifica se existem dados do perfil para preencher os furmulários
    if ($res) {
      foreach ($res as $item) {
        echo $this->view->render('dashboard/perfil', [
          'nome_igreja' => $item->nome_igreja,
          'ministerio' => $item->ministerio,
          'pastor' => $item->pastor,
          'documento' => $item->documento,
          'fundacao' => $item->fundacao,
          'endereco' => $item->endereco,
          'bairro' => $item->bairro,
          'cidade' => $item->cidade,
          'estado' => $item->estado,
          'cep' => $item->cep,
          'pais' => $item->pais,
          'telefone' => $item->telefone,
          'email' => $item->email,
          'site' => $item->site,
        ]);
      }
    } else {
      echo $this->view->render('dashboard/perfil', [
        'nome_igreja' => '',
        'ministerio' => '',
        'pastor' => '',
        'documento' => '',
        'fundacao' => '',
        'endereco' => '',
        'bairro' => '',
        'cidade' => '',
        'estado' => '',
        'cep' => '',
        'pais' => '',
        'telefone' => '',
        'email' => '',
        'site' => '',
      ]);
    }
  }

  /**
   * edita os dados do perfil da sede
   */
  public function editar($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //model perfil
    $perfil = new PerfilModel();

    //verifica se já existe o perfil da sede
    if ($perfil->buscaPerfil($_SESSION['id'])) {

      //faz apenas a edição dos dados
      $perfil->editar($data, $_SESSION['id']);

      header('location: ' . URL . 'dashboard/perfil');
    } else {

      //cadastrar novo perfil tipo sede
      $perfil->adicionar($data, $_SESSION['id']);
      $perfil->completo($_SESSION['id']);
      $_SESSION['completo'] = 1;

      header('location: ' . URL . 'dashboard/perfil');
    }
  }
}
