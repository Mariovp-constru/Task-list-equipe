<?php

namespace App\Controller\Cadastrar;

use App\Controller\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Cadastrar extends Controller
{

    public function index()
    {
        $this->appendCss('login/style');
        $this->business->insertTaskUser($_POST);
        $this->nameTemplate = 'cadastrar-tarefas/cadastrar-tarefa';
        $this->render();
    }
}
