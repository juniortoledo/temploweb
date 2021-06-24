<?php

namespace App\Controllers;

class Idioma
{
  /**
   * seta linguagem padrão
   */
  public function lang()
  {
    return $this->portugues();
  }

  /**
   * português
   */
  public function portugues()
  {
    $lang =  [
      'perfil-1' => 'Nome igreja'
    ];

    return $lang;
  }

  /**
   * português
   */
  public function espanhol()
  {
    $lang =  [
      'perfil-1' => 'Responsable del sistema'
    ];

    return $lang;
  }
}
