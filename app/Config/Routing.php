<?php

namespace App\Config;

use CoffeeCode\Router\Router;

class Routing
{
  public $router;
  public function __construct()
  {
    $this->router = new Router(URL);
    $this->router->namespace('App\Controllers');

    //auth
    $this->router->get('/', 'Auth\Web:home');
    $this->router->get('/cadastro', 'Auth\Web:cadastro');
    $this->router->get('/login', 'Auth\Web:login');
    $this->router->post('/cadastro', 'Auth\Cadastro:cadastro');
    $this->router->post('/login', 'Auth\Login:login');

    //dashboard
    $this->router->get('/dashboard', session('Dashboard\Web:home'));

    /**
     * igrejas
     */
    $this->router->get('/dashboard/igrejas', session('Dashboard\Igrejas:home'));
    $this->router->get('/dashboard/igrejas/listagem', session('Dashboard\Igrejas:listagem'));
    $this->router->get('/dashboard/igrejas/cadastrar', session('Dashboard\Igrejas:cadastrar'));
    $this->router->get('/dashboard/igrejas/editar/{id}', session('Dashboard\Igrejas:editar'));
    $this->router->get('/dashboard/igrejas/deletar/{id}', session('Dashboard\Igrejas:deletar'));
    $this->router->post('/dashboard/igrejas/cadastrar', session('Dashboard\Igrejas:add'));
    $this->router->post('/dashboard/igrejas/editar', session('Dashboard\Igrejas:update'));

    $this->router->get('/dashboard/igrejas/print', session('Dashboard\Igrejas:print'));

    /**
     * sistema
     */
    //usuarios
    $this->router->get('/dashboard/sistema/usuarios', session('Dashboard\Usuarios:usuariosHome'));
    $this->router->get('/dashboard/sistema/usuarios/cadastrar', session('Dashboard\Usuarios:usuariosCadastrar'));
    $this->router->get('/dashboard/sistema/usuarios/listagem', session('Dashboard\Usuarios:listagem'));
    $this->router->get('/dashboard/sistema/usuarios/editar/{id}', session('Dashboard\Usuarios:usuariosEditar'));
    $this->router->get('/dashboard/sistema/usuarios/deletar/{id}', session('Dashboard\Usuarios:deletar'));
    $this->router->post('/dashboard/sistema/usuarios/cadastrar', session('Dashboard\Usuarios:cadastrar'));
    $this->router->post('/dashboard/sistema/usuarios/editar', session('Dashboard\Usuarios:editar'));

    //ajustes do sistema
    $this->router->get('/dashboard/sistema/ajustes', session('Dashboard\Ajustes:home'));
    $this->router->post('/dashboard/sistema/ajustes/patrimonio', session('Dashboard\Ajustes:patrimonio'));
    $this->router->post('/dashboard/sistema/ajustes/data', session('Dashboard\Ajustes:data'));
    $this->router->post('/dashboard/sistema/ajustes/moeda', session('Dashboard\Ajustes:moeda'));

    //perfil
    $this->router->get('/dashboard/perfil', session('Dashboard\Perfil:home'));
    $this->router->post('/dashboard/perfil', session('Dashboard\Perfil:editar'));

    /**
     * Secretaria
     */
    //tipo de pessoas
    $this->router->get('/dashboard/secretaria/tipopessoas', session('Dashboard\TipoPessoa:home'));
    $this->router->get('/dashboard/secretaria/tipopessoas/{id}', session('Dashboard\TipoPessoa:deletar'));
    $this->router->get('/dashboard/secretaria/tipopessoas/editar/{id}', session('Dashboard\TipoPessoa:editar'));
    $this->router->post('/dashboard/secretaria/tipopessoas', session('Dashboard\TipoPessoa:adicionar'));
    $this->router->post('/dashboard/secretaria/tipopessoas/editar', session('Dashboard\TipoPessoa:update'));

    //erros
    $this->router->get('/erro', 'Auth\Web:erro');

    $this->router->dispatch();

    //rota para erros, urls não existenste
    if ($this->router->error()) {
      $this->router->redirect('/erro');
    }
  }
}

//verifica se existe sessões
function session($controller)
{
  if (isset($_SESSION['user'])) {
    return $controller;
  } else {
    return 'Auth\Web:erro';
  }
}
