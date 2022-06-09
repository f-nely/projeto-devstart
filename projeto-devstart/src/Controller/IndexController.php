<?php

declare(strict_types=1);

namespace App\Controller;

class indexController extends AbstractController
{
    public function indexAction(): void
    {
        // include dirname(__DIR__) . '/View/index/index.php';
        parent::render('index/index');
    }

    public function loginAction(): void
    {
        // include dirname(__DIR__) . '/View/index/login.php';
        parent::render('index/login');
    }
}