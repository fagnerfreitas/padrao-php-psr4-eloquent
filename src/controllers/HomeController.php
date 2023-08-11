<?php

namespace src\controllers;

use \core\Controller;
use src\models\Funcionario;

class HomeController extends Controller
{
    public function index()
    {
        $dados = [];

        $employee = new Funcionario();
        $oneFunc = $employee->find(1);
        $oneFunc->name = 'Padrão (PSR-4) com ELOQUENT';
        $oneFunc->save();

        $dados['funcionarios'] = Funcionario::all()->toArray();
    
        $this->render('home', $dados);
    }
}
