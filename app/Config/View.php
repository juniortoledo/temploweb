<?php

namespace App\Config;

use App\Controllers\Idioma;
use App\Models\Dashboard\PerfilModel;
use League\Plates\Engine;

class View extends Idioma
{
  public $view;
  /**
   * padrão para renderizar as views
   */
  public function __construct()
  {
    $this->view = new Engine(__DIR__ . '/../views');
    $this->view->addData(['lang' => $this->lang()]);
  }
}
