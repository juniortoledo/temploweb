<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\TipoDocumentoModel;

/**
 * Usuarios
 */
class TipoDocumento extends View
{
  private $tipoDocumentoModel;
  public function __construct()
  {
    $this->tipoDocumentoModel = new TipoDocumentoModel();
    parent::__construct();
  }

  /**
   * view home
   */
  public function home()
  {
    $data = $this->tipoDocumentoModel->listagem($_SESSION['id']);

    //verifica se existem vales default
    if(!$data) {
      $this->tipoDocumentoModel->add(['nome' => 'Nota Fiscal','tipo' => 'default'], $_SESSION['id']);
      $this->tipoDocumentoModel->add(['nome' => 'Recibo','tipo' => 'default'], $_SESSION['id']);
      $this->tipoDocumentoModel->add(['nome' => 'Depósito','tipo' => 'default'], $_SESSION['id']);
      $this->tipoDocumentoModel->add(['nome' => 'Dinheiro','tipo' => 'default'], $_SESSION['id']);
      $this->tipoDocumentoModel->add(['nome' => 'Boleto','tipo' => 'default'], $_SESSION['id']);
    }

    echo $this->view->render('dashboard/financeiro/tipo_documento/home', ['data' => $data]);
  }

  /**
   * view editar
   */
  public function editar($data)
  {
    $res = $this->tipoDocumentoModel->listagemId($data['id']);

    echo $this->view->render('dashboard/financeiro/tipo_documento/editar', ['data' => $res]);
  }

  /**
   * adionar novo
   */
  public function add($data)
  {
    $data = ['http' => $_SERVER['METHOD_REQUEST']] + $data;

    $res = $this->tipoDocumentoModel->add($data, $_SESSION['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/financeiro/tipo-documento');
    }
  }

  /**
   * edita o cargo
   */
  public function update($data)
  {    
    $res = $this->tipoDocumentoModel->update($data);
    
    if($res) {
      header('location:'.URL.'dashboard/financeiro/tipo-documento/editar/'.$data['id']);
    }
  }

  /**
   * deletar
   */
  public function del($data)
  {
    $res = $this->tipoDocumentoModel->del($data['id']);
    
    if($res) {
      header('location:'.URL.'dashboard/financeiro/tipo-documento');
    }
  }
}
