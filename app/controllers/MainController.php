<?php
namespace web\controllers;

use liw\core\Controller;
use liw\core\web\Request;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->render('index');
    }

    public function moreAction()
    {
        $this->render('more');
    }

    public function installAction()
    {
        $this->render('install');
    }

    public function testAction()
    {
        $this->redirect('/install');
    }

}
