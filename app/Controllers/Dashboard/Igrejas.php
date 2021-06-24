<?php

namespace App\Controllers\Dashboard;

use App\Config\View;
use App\Models\Dashboard\IgrejasModel;
use Dompdf\Dompdf;

/**
 * igrejas
 */
class Igrejas extends View
{
  /**
   * view home
   */
  public function home()
  {
    echo $this->view->render('dashboard/igrejas/home');
  }

  /**
   * view editar
   */
  public function editar($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //model igrejas
    $igrejas =  new IgrejasModel();
    $res = $igrejas->buscaCongregacao($data['id']);

    //verifica se existem dados do perfil para preencher os furmulários
    if ($res) {
      foreach ($res as $item) {
        echo $this->view->render('dashboard/igrejas/editar', [
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
          'id' => $item->id
        ]);
      }
    }
  }

  /**
   * view cadastrar
   */
  public function cadastrar()
  {
    echo $this->view->render('dashboard/igrejas/cadastrar');
  }

  /**
   * cadastra os dados do perfil da congregação
   */
  public function add($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //model igrejas
    $igrejas =  new IgrejasModel();

    //cadastrar novo igrejas tipo sede
    $igrejas->adicionar($data, $_SESSION['id']);
    header('location: ' . URL . 'dashboard/igrejas');
  }

  /**
   * edita os dados do perfil da congregação
   */
  public function update($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //model igrejas
    $igrejas = new IgrejasModel();

    //faz apenas a edição dos dados
    if ($igrejas->editar($data)) {
      header('location: ' . URL . 'dashboard/igrejas/editar/' . $data['id']);
    }
  }

  /**
   * listagem dos dados do perfil da congregação
   */
  public function listagem()
  {
    //model igrejas
    $igrejas =  new IgrejasModel();

    //faz apenas a edição dos dados
    $data = $igrejas->buscaIgreja($_SESSION['id']);

    echo json_encode($data, true);
  }

  /**
   * deleta a igreja pelo id
   */

  public function deletar($data)
  {
    $data = ['http' => $_SERVER['REQUEST_METHOD']] + $data;

    //model igrejas
    $igrejas =  new IgrejasModel();

    if ($igrejas->del($data['id'])) {
      header('location: ' . URL . 'dashboard/igrejas');
    }
  }

  /**
   * imprime os resultados
   * gera um pdf
   */
  public function print()
  {
    ob_start();
    require __DIR__ . '../../../views/dashboard/igrejas/relatorio.php';

    $pdf = ob_get_clean();

    $dompdf = new Dompdf();
    $dompdf->loadHtml($pdf);

    // Setup the paper size and orientation
    $dompdf->setPaper('A4');

    // Render 
    $dompdf->render();

    // Output
    $dompdf->stream('relatório.pdf', ['Attachment' => false]);
  }
}
