<?php

declare(strict_types=1);

namespace App\Controller;

class indexController
{
    public function indexAction(): void
    {
        // echo dirname(__DIR__);
        // echo __DIR__;
        include dirname(__DIR__) . '/View/index/index.php';
    }

    public function loginAction(): void
    {
        include dirname(__DIR__) . '/View/index/login.php';
    }
}